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
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('karyawan', function () {
    return view('karyawan');
})->middleware(['auth'])->name('karyawan');

Route::get('obat', function () {
    return view('obat');
})->middleware(['auth'])->name('obat');

require __DIR__.'/auth.php';
