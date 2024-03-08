<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class buku extends Model
{
    use HasFactory;
    protected $primaryKey = "id_buku";
    protected $table = "buku";
    protected $guarded = [
        'id_buku'
    ];

    public function peminjaman()
    {
        return $this->hasOne(Peminjaman::class, 'id_buku', 'id_buku');
    }

    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'id_koleksi');
    }
}
