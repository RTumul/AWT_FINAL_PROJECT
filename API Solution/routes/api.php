<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/users/create', [apiController::class, 'create']);
Route::get('/users/details/{id}', [apiController::class, 'search']); 
Route::post('/users/login',[apiController::class,'login']);
Route::post('/users/logout',[apiController::class,'logout']);
Route::get('/products/{id}',[apiController::class,'products']);
Route::get('/product/details/{id}', [apiController::class,'productDetails']);
Route::post('/product/details/{id}', [apiController::class, 'productEdit']);
Route::post('/product/upload/{id}', [apiController::class, 'uploadProduct']);
Route::get('/product/delete/{id}', [apiController::class, 'deleteProduct']);
