<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\GuestController;


Route::get('/buku-tamu', [GuestController::class, 'create'])->name('create');
Route::post('/buku-tamu', [GuestController::class, 'store'])->name('guestbook.store');
Route::get('/daftar-tamu', [GuestController::class, 'index'])->name('guestbook.index');
