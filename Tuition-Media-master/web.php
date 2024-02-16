<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


                // Profile Work

//user information
Route::get('page/user/profile', [App\Http\Controllers\HomeController::class, 'userProfile'])->name('user_profile');




Route::get('/index', [App\Http\Controllers\HomeController::class, 'homeindex']);

Route::get('payment', function () {
    return view('payment');
});
Route::post('payment',[PaymentController::class,'payData']);



Route::get('course', function () {
    return view('course');
});
Route::get('teacher', function () {
    return view('teacher');
});
Route::get('privacy', function () {
    return view('privacy');
});



