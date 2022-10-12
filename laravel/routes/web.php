<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\Product\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::name('user.')->group(function () {

    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('Auth.login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function () {
        if (Auth::check()) {
            return redirect(route('admin.product'));
        }
        return view('Auth.registration');
    })->name('registration');

    Route::post('/registration', [RegisterController::class, 'save']);
});

Route::get('/request',function (){
    return view('request');
})->name('request');
Route::post('/request/submit', [RequestController::class,'submit'])->name('request-form');

Route::get('/contact',function (){
    return view('contact');
})->name('contact');


Route::get('/about',function (){
    return view('about');
})->name('about-us');

Route::get('/all/product', [ProductController::class, 'allData'])->name('all-product');

Route::get('/admin' ,function (){
    return view('admin');
})->name('admin');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Product'], function (){
        Route::get('/product', [AdminController::class, 'index'])->name('admin.product');
        Route::get('/product/add', function (){
            return view('admin.product.add_product');
        })->name('admin.addProduct');
        Route::post('/product/add', [ProductController::class,'addData'])->name('admin.addProductForm');
    });
});
