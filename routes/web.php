<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\JurusanController;
=======
use App\Http\Controllers\MahasiswaController;
>>>>>>> 8b19830a147d8124a4acf031e24d0974c6a29613

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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource(name : 'jurusan', controller: JurusanController::class);
=======
Route::resource('mahasiswa', MahasiswaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 8b19830a147d8124a4acf031e24d0974c6a29613
