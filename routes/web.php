<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [HomeController::class, 'index'])->name('display_home');

// Route::post('/post', [HomeController::class, 'store'])->name('home');

// Route::get('/display', [HomeController::class, 'show'])->name('display_data');

// Route::get('/edit', [HomeController::class, 'edit'])->name('user_edit');
// Route::post('/update', [HomeController::class, 'update'])->name('update');

// Route::get('/delete', [HomeController::class, 'destroy'])->name('user.delete');

 Route::get('/', [HomeController::class, 'index2'])->name('add_course');
// Route::post('/course_submit', [HomeController::class, 'store2'])->name('course');
// Route::get('/display_courses', [HomeController::class, 'show2'])->name('display_courses');


// Route::get('/course_edit', [HomeController::class, 'edit2'])->name('course_edit');
// Route::post('/course_update', [HomeController::class, 'update2'])->name('course_update');
// Route::get('/course_delete', [HomeController::class, 'destroy2'])->name('course_delete');

// Route::get('/login', [HomeController::class, 'login_show'])->name('login');
// Route::post('/login_submit', [HomeController::class, 'login'])->name('login_submit');

// Route::get('/web_show', [HomeController::class, 'web_show'])->name('web_show');
// Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
