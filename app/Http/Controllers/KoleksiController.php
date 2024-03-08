<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KoleksiController extends Controller
{
    public function index(): View
    {
        $user =  auth()->user();
        $koleksi = Koleksi::where('id_user', $user->id)->with('buku')->get();
        // dd($koleksi);
        return view('koleksi.index', compact('koleksi', 'user'));
    }

    public function store(Request $request)
    {
        $koleksi = $request->validate([
            'id_buku' => 'required',
            'id_user' => 'required',
        ]);

        Koleksi::create($koleksi);
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $koleksi = Koleksi::where('id_koleksi', $id);
        // $koleksi = Koleksi::where('id_user', $request->id_user)->where('id_buku', $request->id_buku)->first();
        $koleksi->delete();
        return redirect()->back();
    }
}
