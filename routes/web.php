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
Route::get('/student/index', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::get('student/create',[App\Http\Controllers\StudentController::class, 'create'])->name('create');
Route::post('student/store',[App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::get('student/detail/{id}',[App\Http\Controllers\StudentController::class, 'show'])->name('show');
Route::get('student/edit/{id}',[App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
Route::post('student/update/{id}',[App\Http\Controllers\StudentController::class, 'update'])->name('update');
Route::get('student/delete/{id}',[App\Http\Controllers\StudentController::class, 'destroy'])->name('destroy');
