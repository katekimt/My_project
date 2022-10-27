<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function allData()
    {
        $data = Product::paginate(12);
        return view('all_product', compact('data'));
    }

    public function addData(ProductRequest $request)
    {
        $request->validated();
        $path = $request->file('image')->store('allProduct', 'public');
        Product::create(['image' => $path,
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect()->route('admin.addProduct');
    }

    public function update(ProductRequest $request){
        $request->validated();
        $path = $request->file('image')->store('allProduct', 'public');
        DB::table('products')
            ->where('code', $request->old_code)
            ->update([
                'image' => $path,
                'name' => $request->name,
                'code' => $request->code,
            ]);
        return redirect()->route('admin.addProduct');
    }

    public function delete(Request $request){
        DB::table('products')
            ->where('code', $request->code)
            ->delete();
        return redirect()->route('admin.addProduct');
    }

}
