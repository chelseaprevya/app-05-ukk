<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index()
    {
        $data = buku::all();
        return view('welcome', compact('data'));
    }

    public function detail(buku $buku)
    {
        $koleksi = Koleksi::where('id_buku', $buku->id_buku)->where('id_user', Auth::id())->first();
        return view('detailbuku', compact('koleksi', 'buku'));
    }
}
