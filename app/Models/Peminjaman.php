<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'peminjamen';
    protected $guarded = [
        'id'
    ];

    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku', 'id_buku');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
