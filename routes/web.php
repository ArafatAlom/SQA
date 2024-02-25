<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
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
Route::get('profile', function () {
    return view('profile');
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

// Route to display all teachers
Route::get('/teachers', [TeacherController::class, 'index']);

// Route to create a new teacher (display form)
Route::get('/teachers/create', [TeacherController::class, 'create']);

// Route to store a newly created teacher
Route::post('/teachers', [TeacherController::class, 'store']);

// Route to show a specific teacher
Route::get('/teachers/{teacher}', [TeacherController::class, 'show']);

// Route to update a specific teacher (display form)
Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit']);

// Route to update a specific teacher
Route::put('/teachers/{teacher}', [TeacherController::class, 'update']);

// Route to delete a specific teacher
Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy']);
