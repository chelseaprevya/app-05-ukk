<?php

namespace App\Http\Controllers;

use App\Models\Buku;
// use Illuminate\Contracts\View\View as ViewView;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $buku = buku::latest()->paginate(5);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
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
    public function show(string $id): View
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $buku = Buku::findOrFail($id);
        return view('buku.update', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request , [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'max:2048',
            'stok' => 'required',
            'genre' => 'required'
        ]);

        $buku = Buku::findOrFail($id);

        if($request->hasFile('gambar')) 
        {
            if (Storage::exists('/public'. $buku->gambar)) {
                Storage::delete('/public'. $buku->gambar);
            }

            $image = $request->file('gambar');
            $name = $image->getClientOriginalName();
            $image->storeAs('public/buku', $name);
            $photoPath = '/buku'.$name;
            $buku->gambar = $photoPath;
    
            // File::delete(public_path('/storage/buku') . $buku->gambar);
            // Storage::delete(['public/buku/'. $buku->image]);
            $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'deskripsi' => $request->deskripsi,
            // 'gambar' => $image->hashName(),
            'stok' => $request->stok,
            'genre' => $request->genre
            ]);
        }
        // else 
        // {
        //     $buku->update([
        //     'judul' => $request->judul,
        //     'penulis' => $request->penulis,
        //     'penerbit' => $request->penerbit,
        //     'tahun_terbit' => $request->tahun_terbit,
        //     'deskripsi' => $request->deskripsi,
        //     'stok' => $request->stok,
        //     'genre' => $request->genre
        //     ]);
        // }
        return redirect()->to('buku')->with('succes', 'Data Berhasil Diupdate');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $buku = Buku::findOrFail($id);

        Storage::delete('/public/buku/'. $buku->image);

        $buku->delete();
        return redirect()->to('buku')->with('succes', 'Data Berhasil Dihapus');
    }
}
