<?php

use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
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

// Route::get('/', function (Request $request) {
//     return view('welcome',compact('request'));
// });

Route::get('/',[CourseController::class,'index'])->name('DEMO');

Route::get('/Course',[CourseController::class,'index']);

Route::get('Search',[CourseController::class,'search'])->name('search');

Route::get('/Detail/{slug}',[CourseController::class,'detail'])->name('Detail');

// Route::get('/Search', function () {
//     return view('search');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
