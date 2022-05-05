<?php

use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\AccessoryControllerWeb;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PhoneControllerWeb;
use Illuminate\Support\Facades\Route;

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
});
Route::get('/showPhone', [PhoneControllerWeb::class, 'index']);
Route::get('/home', function () {
    return view('home');
});

//Cart
Route::get('/cart', function () {
    return view('cart');
});
//Admin
Route::get('/showAdmin', function () {
    return view('Admin/showAdmin');
});

Route::get('/updateAdmin', function () {
    return view('Admin/updateAdmin');
});
Route::resource('phone', PhoneControllerWeb::class);
Route::resource('accessory', AccessoryControllerWeb::class);
Route::get('/createAdmin', function () {
    return view('Admin/createNewAdmin');
});
//Phone
// Route::get('/showPhone', function () {
//     return view('Phone/showPhone');
// });

Route::get('/createPhone', function () {
    return view('Phone/createNewPhone');
});

Route::get('/updatePhone', function () {
    return view('Phone/updatePhone');
});
//Accessory
Route::get('/showAccessory', function () {
    return view('Accessory/showAccessory');
});

Route::get('/createAccessory', function () {
    return view('Accessory/createNewAccessory');
});

Route::get('/updateAccessory', function () {
    return view('Accessory/updateAccessory');
});
//Image
Route::get('/image', function () {
    return view('image');
});

//Home Page
Route::get('/mainHome', function () {
    return view('home');
});