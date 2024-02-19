<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\View\View;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $buku = buku::latest()->paginate(5);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
       return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $this->validate($request , [
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'stok' => 'required',
        'genre' => 'required'
       ], [
        'judul.required' => 'judul diisi',
        'penulis.required' => 'penulis diisi',
        'penerbit.required' => 'penerbit diisi',
        'tahun_terbit.required' => 'tahun_terbit diisi',
        'deskripsi.required' => 'deskripsi diisi',
        'gambar.required' => 'gambar diisi',
        'genre.required' => 'genre diisi'
       ]);

       $image = $request->file('gambar');
       $image->storeAs('public/buku', $image->hashName());

       $buku = [
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'deskripsi' => $request->deskripsi,
        'gambar' => $image->hashName(),
        'stok' => $request->stok,
        'genre' => $request->genre
       ];

       buku::create($buku);
       return redirect()->to('buku')->with('succes', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
