<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;


/*
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('/pengajuan', [PengajuanController::class, 'index'])
->name('pengajuan.index')->middleware('auth');


Route::get('pengajuan/pengajuan-insert', [PengajuanController::class, 'create'])
->name('pengajuan.create')->middleware('auth');

Route::post('/pengajuan', [PengajuanController::class, 'store'])
->name('pengajuan.store')->middleware('auth');

Route::get('/pengajuan/pengajuan-view/{pengajuan}', [PengajuanController::class,'show'])
->name('pengajuan.show')->middleware('auth');

Route::get('/pengajuan/{pengajuan}/pengajuan-edit', [PengajuanController::class,'edit'])
->name('pengajuan.edit')->middleware('auth');

Route::patch('/pengajuan/{pengajuan}', [PengajuanController::class,'update'])
->name('pengajuan.update')->middleware('auth');

Route::delete('/pengajuan/{pengajuan}', [PengajuanController::class,'destroy'])
->name('pengajuan.destroy')->middleware('auth');