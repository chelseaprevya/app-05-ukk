<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProfileController;
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
Route::get('/dashboard-admin', function () {
    return view('Admin.dbAdmin');
})->name('dashboard-admin');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Route::group(['middleware'=>'role:admin,petugas'], function(){
// });

Route::group(['middleware'=>'role:admin,petugas'], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

Route::get('/indexkategori', function () {
    return view('indexkategori');
});

Route::get('/detail', function () {
    return view('detailbuku');
});

Route::get('/Admin', function () {
    return view('Admin.dbAdmin');
});

Route::get('/buku', function () {
    return view('buku.index');
});

Route::get('/detailbuku', function () {
    return view('detailbuku');
});

Route::get('/create', function () {
    return view('buku.create');
});

Route::get('/buku', function () {
    return view('buku.show');
});
Route::resource('/buku', BukuController::class);