<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HalkBankController;

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




Route::get('/create_0',function () {
    return view('image_create');
});

Route::post('/create_0', [ImageController::class, 'save'])->name('image.save');

 Route::get('/credit_cart_0', [ImageController::class, 'index'])->name('image.index');


//  halk bank start

Route::get('/credit_cart',  [HalkBankController::class, 'credit_cart'])->name('credit_cart');

Route::get('/atms',  [HalkBankController::class, 'atms'])->name('atms');

Route::post('/atms',  [HalkBankController::class, 'atms_atms'])->name('atms_atms');

// halk bank end

 