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

Route::middleware('guest')->get('/authenticate', function () {
    return view('index');
})->name('authenticate');
Auth::routes();


Route::middleware('auth', 'check.role')->group(function () {
    Route::get('/course', function () {
        return view('course');
    })->name('course.index');

    Route::get('/student', function () {
        return view('student');
    })->name('student.index');

    Route::get('/teacher', function () {
        return view('teacher');
    })->name('teacher.index');

    Route::get('/course/schedule', function () {
        return view('course-schedule');
    })->name('course.schedule');

    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// Route::middleware('check.role')->get('/teacher/schedule', function () {
//     return view('home');
// })->name('teacher.schedule');
