<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\buku;
use App\Models\peminjaman;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::insert([
            [
                'name' => 'admin',
                'username' => 'superadmin',
                'no_telp' => '08123456789',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ], [
                'name' => 'petugas',
                'username' => 'pustakawan',
                'no_telp' => '08224567232',
                'email' => 'petugas@example.com',
                'role' => 'petugas',
                'password' => Hash::make('password')
            ], [
                'name' => 'muna',
                'username' => 'munajib',
                'no_telp' => '12345678910',
                'email' => 'peminjam@example.com',
                'role' => 'peminjam',
                'password' => Hash::make('password')
            ]
        ]);

        buku::insert([
            [
                'judul' => 'Bulan',
                'penulis' => 'Tere Liye',
                'penerbit' => 'gramedia',
                'tahun_terbit' => '2017',
                'deskripsi' => ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, rerum!',
                'gambar' => null,
                'stok' => '2',
                'genre' => 'fiksi'
            ]
        ]);
        Peminjaman::insert([
            [
                'id_user' => 3,
                'id_buku' => 1,
                'tanggal_pinjam' => '2025-05-20',
                'tanggal_kembali' => '2025-05-27',
                'status' => '1',
                'jumlah' => 1
            ]
        ]);
    }
}
