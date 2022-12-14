<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;
use App\Http\Controllers\VendorControllers;

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

Route::get("/", [PageControllers::class,'home'])->name('index.home');
Route::get("/registration", [PageControllers::class,'registration'])->name('index.registration');
Route::get('/vendorregistration', [VendorControllers::class,'regAsVen'])->name('regAsVen');
Route::post('/vendorregistration',[VendorControllers::class,'create'])->name('vendor.create');
Route::get('/login',[PageControllers::class, 'login'])->name('public.login');
Route::post('/login', [VendorControllers::class, 'loginAuth']);
Route::get('/vendorDashboard', [VendorControllers::class, 'dashboard'])->name('vendor.dashboard');
 Route::get('/vendorDashboard/products', [VendorControllers::class, 'productList'])->name('products');
 Route::get('/product/details/edit/{id}',[VendorControllers::class,'productEdit'])->name('vendor.edit');
 Route::post('/product/details/edit/{id}', [VendorControllers::class, 'updateProduct']);
 Route::get('/product/delete/{id}', [VendorControllers::class, 'deleteProduct'])->name('delete');


 Route::get('/product/upload',[VendorControllers::class, 'uploadProduct'])->name('upload');
 Route::post('/product/upload',[VendorControllers::class,'validateProduct']);
 

Route::get('/logout',function(){
  session()->forget('logged');
  session()->flash('msg','Sucessfully Logged out');
  return redirect()->route('public.login');
})->name('logout');
