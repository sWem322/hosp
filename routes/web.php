<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [MainController::class, 'main']);
Route::get('/services', [ServicesController::class, 'services']);
Route::get('/doctors', [DoctorsController::class, 'doctors'])->name('doctors');
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/news', [NewsController::class, 'news']);


Route::post('/doctors/sign', [DoctorsController::class, 'doctors_sign']);









// Route::get('/', function () {
//     return view('main');
// });
// Route::get('/admin', function () {
//     return view('admin');
// });
// Route::get('/doctors', function () {
//     return view('doctors');
// });
// Route::get('/news', function () {
//     return view('news');
// });
// Route::get('/services', function () {
//     return view('services');
// });
// Route::get('/admin', function () {
//     return view('admin');
// });
