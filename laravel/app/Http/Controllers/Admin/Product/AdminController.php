<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.product.index');
    }
}
