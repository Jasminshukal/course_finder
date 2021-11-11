<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\CoursesController as AdminCourses;
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

Route::get('/CourseList',[CourseController::class,'index'])->name('main');

Route::get('Search',[CourseController::class,'search'])->name('search');

Route::get('/Detail/{slug}',[CourseController::class,'detail'])->name('Detail');

// Route::get('/Search', function () {
//     return view('search');
// });

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/Courses', [AdminCourses::class, 'index'])->name('courses');
    Route::get('/University', [App\Http\Controllers\HomeController::class, 'index'])->name('University');
});
