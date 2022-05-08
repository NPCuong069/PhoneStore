<?php

use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\AccessoryControllerWeb;
use App\Http\Controllers\AdminControllerWeb;
use App\Http\Controllers\AuthControllerWeb;
use App\Http\Controllers\ImageController;
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
Route::get('/login', [AdminControllerWeb::class, 'show']);
Route::post('/login', [AdminControllerWeb::class, 'customLogin']);
Route::post('/image',[ImageController::class,'upload'])->name('upload.base64');
Route::get('/home', function () {
    return view('home');
});

//Cart
Route::get('/cart', function () {
    return view('cart');
});
//Admin
Route::group(['middleware' => ['admin']], function() {
    Route::get('/admin', [AdminControllerWeb::class, 'index']);
    Route::get('/admin/create', [AdminControllerWeb::class, 'registration']);
    Route::post('/admin/create', [AdminControllerWeb::class, 'customRegistration'])->name('admin.customRegistration');;
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('phone', PhoneControllerWeb::class);
    Route::resource('accessory', AccessoryControllerWeb::class);
});

Route::post('signout', [AdminControllerWeb::class, 'signOut'])->name('signout');
Route::get('/createAdmin', function () {
    return view('Admin/createNewAdmin');
});

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
Route::get('login', [AuthControllerWeb::class, 'index'])->name('login');
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