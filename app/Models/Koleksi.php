<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;
    protected $primarykey = 'id_koleksi';
    protected $table = 'koleksis';
    protected $fillable = [
        'id_koleksi',
        'id_buku',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku');
    }
}
