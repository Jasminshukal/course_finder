<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\CoursesController as AdminCourses;
use App\Http\Controllers\Admin\UniversityController;
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

    /////////////////////////////////////////////////////////////////////////////////////////
    //Courses
    /////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/Courses', [AdminCourses::class, 'index'])->name('courses');
    //add
    Route::get('/Courses/add', [AdminCourses::class, 'add'])->name('courses.add');
    Route::post('/Courses/store', [AdminCourses::class, 'store'])->name('courses.store');
    /////////////////////////////////////////////////////////////////////////////////////////
    //University
    /////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/University', [UniversityController::class, 'index'])->name('University');
    //edit
    Route::get('/University/edit/{id}', [UniversityController::class, 'edit'])->name('University.edit');
    Route::post('/University/edit/{id}', [UniversityController::class, 'update'])->name('University.update');
    //add
    Route::get('/University/add', [UniversityController::class, 'add'])->name('University.add');
    Route::post('/University/add', [UniversityController::class, 'update'])->name('University.update');
});
