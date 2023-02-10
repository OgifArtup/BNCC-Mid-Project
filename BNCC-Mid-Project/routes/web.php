<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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
    return view('index');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/add', [KaryawanController::class, 'add'])->name('getAdd');
Route::post('/create-karyawan', [KaryawanController::class, 'createKaryawan']);

Route::get('/view', [KaryawanController::class, 'getKaryawan'])->name('getKaryawan');

Route::get('/update-karyawan/{id}', [KaryawanController::class, 'getKaryawanById'])->name('KaryawanController');
Route::patch('/update-karyawan/{id}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');

Route::delete('/delete-karyawan/{id}', [KaryawanController::class, 'deleteKaryawan'])->name('delete');