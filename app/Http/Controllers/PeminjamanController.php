<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $peminjaman = Peminjaman::with(['buku', 'user'])->get();
        // dd($peminjaman);
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function generateAll()
    {
        $peminjaman = Peminjaman::with(['buku', 'user'])->get();
        // dd($peminjaman);
        return view('laporan.struk1', compact('peminjaman'));
    }

    public function laporan($id)
    {
        $peminjaman = Peminjaman::where('id', $id)->with(['buku', 'user'])->first();
        // dd($peminjaman);
        return view('laporan.struk2', compact('peminjaman'));
    }

    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = buku::all();
        $user = User::where('role', 'peminjam')->get();
        return view('peminjaman.create', compact('buku', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peminjaman = $request->validate([
            'id_buku' => 'required',
            'id_user' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);
        Peminjaman::create($peminjaman);
        return redirect('/peminjaman');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update([
            'status' => '0'
        ]);
        return redirect('/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
