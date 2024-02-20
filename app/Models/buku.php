<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $primaryKey = "id_buku";
    protected $table = "buku";
    protected $fillable = [
        'id_buku',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'deskripsi',
        'gambar',
        'stok',
        'genre'
    ];
}
