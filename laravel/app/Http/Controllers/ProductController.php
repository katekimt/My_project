<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function allData(){
        $data = Product::paginate(12);
        return view('all_product', compact('data'));
    }

    public function addData(ProductRequest $request){
        Product::create($request->validated());
        return redirect()->route('admin.addProduct');
    }

}
