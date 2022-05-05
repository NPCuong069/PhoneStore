<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PhoneController;
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
// Route::get('/product',[PhoneController::class,'showAll']);
// Route::get('/',function(){
//     return 'product';
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('multiple-image-upload', [ImageController::class, 'store']);
Route::get('/comment',[App\Http\Controllers\CommentController::class,'commentByPhone']);
Route::get('/rate',[App\Http\Controllers\CommentController::class,'rateByPhone']);
Route::resource('phone', PhoneController::class);
Route::get('/comment2',[App\Http\Controllers\CommentController::class,'commentByAccessory']);
Route::get('/rate2',[App\Http\Controllers\CommentController::class,'rateByAccessory']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    Route::resource('cart',CartController::class);
    
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
});
