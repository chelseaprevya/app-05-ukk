<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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


Route::get('/dashboard-admin', function () {
    return view('Admin.dbAdmin');
})->name('dashboard-admin');



// Route::group(['middleware'=>'role:admin,petugas'], function(){
// });

Route::group(['middleware' => 'role:admin,petugas'], function () {
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

require __DIR__ . '/auth.php';

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

Route::get('/peminjaman', function () {
    return view('peminjaman.index');
});

// buku
Route::get(
    '/buku',
    [BukuController::class, 'index']
);

Route::get(
    '/buku/create',
    [BukuController::class, 'create']
);

Route::post(
    '/buku/create',
    [BukuController::class, 'store']
);

Route::get(
    '/buku/update/{buku:id_buku}',
    [BukuController::class, 'edit']
);

Route::put(
    '/buku/update/{buku:id_buku}',
    [BukuController::class, 'update']
);

Route::delete(
    '/buku/delete/{buku:id_buku}',
    [BukuController::class, 'destroy']
);


// USER
Route::get(
    '/user',
    [UserController::class, 'index']
);

Route::get(
    '/user/create',
    [UserController::class, 'create']
);

Route::post(
    '/user/create',
    [UserController::class, 'store']
);

Route::get(
    '/user/update/{user:id}',
    [UserController::class, 'edit']
);

Route::put(
    '/user/update/{user:id}',
    [UserController::class, 'update']
);

Route::delete(
    '/user/delete/{user:id}',
    [UserController::class, 'destroy']
);


// PEMINJAMAN
Route::get(
    '/peminjaman',
    [PeminjamanController::class, 'index']
);

Route::get(
    '/peminjaman/create',
    [PeminjamanController::class, 'create']
);

Route::post(
    '/peminjaman/create',
    [PeminjamanController::class, 'store']
);


Route::put(
    '/peminjaman/update/{peminjaman:id}',
    [PeminjamanController::class, 'update']
);

Route::delete(
    '/peminjaman/delete/{peminjaman:id}',
    [PeminjamanController::class, 'destroy']
);

// STRUK
Route::get(
    '/struk',
    [PeminjamanController::class, 'generateAll']
);

Route::get(
    '/struk/one/{id}',
    [PeminjamanController::class, 'laporan']
);

Route::get(
    '/',
    [ViewController::class, 'index']
)->name('welcome');

Route::get(
    '/detailbuku/{buku:id_buku}',
    [ViewController::class, 'detail']
);

Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index');
Route::post('/koleksi', [KoleksiController::class, 'store'])->name('koleksi.store');
Route::delete('/koleksi/{id}', [KoleksiController::class, 'destroy'])->name('koleksi.destroy');

// Route::get(
//     '/koleksi/index',
//     [ViewController::class, 'index']
// );
