<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
});
Route::get('payment', function () {
    return view('payment');
});
Route::get('login', function () {
    return view('login');
});
Route::get('course', function () {
    return view('course');
});
Route::get('privacy', function () {
    return view('privacy');
});
Route::get('register', function () {
    return view('register');
});

Route::get('request', function () {
    return view('request');
});
Route::post('request', [ RequestController::class, 'addData' ] );