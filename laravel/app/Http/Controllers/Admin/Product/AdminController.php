<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Inform;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.product.index');
    }

    public function getOrders(){
       $data = Inform::all();
       return view('admin.order.order', compact('data'));
    }

    public function deleteAll(){
        DB::table('informs')->where('deleted', false)->update(['deleted' => true]);
        return redirect()->route('admin.getOrder');
    }

    public function deleteOne($id){
        DB::table('informs')->where('id', $id)->update(['deleted' => true]);
        return redirect()->route('admin.getOrder');
    }
}
