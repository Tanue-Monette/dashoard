<?php

use App\Http\Controllers\ClassesContorller;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentContorller;
use App\Http\Controllers\TeacherContorller;
use App\Http\Controllers\UsersController;
use App\Models\Classe;
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
    return view('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/course', [CoursesController::class, 'index']);

Route::post('/add-course', [CoursesController::class, 'store']);

Route::get('/view-course', [CoursesController::class, 'show'])->name('view-course');

Route::get('/view-course', [CoursesController::class, 'view']);

Route::get('/add-user', [UsersController::class, 'index'])->name('add-user');

Route::get('/users', [UsersController::class, 'show'])->name('users');

Route::post('/addU', [UsersController::class, 'store'])->name('addU');

Route::get('/add-classe', [ClassesContorller::class, 'index'])->name('add-classe');

Route::post('/add-classes', [ClassesContorller::class, 'store'])->name('add-classes');

Route::get('/classes', [ClassesContorller::class, 'show'])->name('classes');

Route::get('/teacher', [TeacherContorller::class, 'index']);
Route::post('/add-teacher', TeacherContorller::class, 'store')->name('add-teacher');
Route::get('view-teacher', [TeacherContorller::class, 'show']);

Route::get('/student', [StudentContorller::class, 'index']);
Route::get('view-student', [StudentContorller::class, 'show']);
Route::post('/add-student', [StudentContorller::class, 'store'])->name('add-student');
