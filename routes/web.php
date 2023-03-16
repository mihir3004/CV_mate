<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registration;

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

Route::get('/signup', [registration::class, 'signup']);
Route::post('/register', [registration::class, 'valid'])->name('student.create');
Route::get('/login', [registration::class, 'login'])->name('student.login');
Route::post('/next', [registration::class, 'next'])->name('student.next');
Route::get('/Admin', [registration::class, 'Admin'])->name('admin.next');
Route::get('/verify_student', [registration::class, 'verifys'])->name('verify.student');
