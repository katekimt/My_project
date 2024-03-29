<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function allData()
    {
        $data = Product::paginate(12);

        return view('all_product', compact('data'));
    }

    public function mainProduct()
    {
        $data = DB::table('products')->where('main_product', true)->get();

        return view('welcome', compact('data'));
    }

    public function addData(ProductRequest $request)
    {
        $request->validated();
        $path = $request->file('image')->store('allProduct', 'public');
        Product::create(['image' => $path,
            'name' => mb_strtoupper($request->name),
            'code' => $request->code,
        ]);

        return redirect()->route('admin.addProduct');
    }

    public function addMainProduct(Request $request)
    {
        $data = DB::table('products')
            ->where('code', $request->code)
            ->update([
                'main_product' => true,
            ]);
        if ($data == null) {
            return redirect()->route('admin.mainProduct');
        }

        return redirect()->route('admin.mainProduct');
    }

    public function deleteMainProduct(Request $request)
    {
    }

    public function update(ProductRequest $request)
    {
        $request->validated();
        $path = $request->file('image')->store('allProduct', 'public');
        DB::table('products')
            ->where('code', $request->old_code)
            ->update([
                'image' => $path,
                'name' => mb_strtoupper($request->name),
                'code' => $request->code,
            ]);

        return redirect()->route('admin.addProduct');
    }

    public function delete(Request $request)
    {
        DB::table('products')
            ->where('code', $request->code)
            ->delete();

        return redirect()->route('admin.addProduct');
    }

    public function deleteOneMainProduct($id)
    {
        DB::table('products')->where('id', $id)->update(['main_product' => false]);

        return redirect()->route('admin.mainProduct');
    }

    public function getMainProduct()
    {
        $data = DB::table('products')->where('main_product', true)->get();

        return view('admin.product.main_products', compact('data'));
    }

    public function search(Request $request)
    {
        $data = Product::where('name', 'like', '%'.mb_strtoupper($request->name).'%')
            ->orWhere('name', 'like', mb_strtoupper($request->name).'%')
            ->orWhere('name', 'like', '%'.mb_strtoupper($request->name))
            ->paginate(12);

        return view('all_product', compact('data'));
    }
}
