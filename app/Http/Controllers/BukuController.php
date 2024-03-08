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
        $buku = Buku::latest()->paginate(5);
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
        $data = $request->validate([
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
        $imageName = $image->getClientOriginalName();
        $image->storeAs('public/buku', $imageName);

        $data['gambar'] = $imageName;

        buku::create($data);
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
    public function edit(buku $buku): View
    {
        return view('buku.update', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku): RedirectResponse
    {
        $data = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'max:255|nullable',
            'stok' => 'required',
            'genre' => 'required'
        ], [
            'judul.required' => 'judul diisi',
            'penulis.required' => 'penulis diisi',
            'penerbit.required' => 'penerbit diisi',
            'tahun_terbit.required' => 'tahun_terbit diisi',
            'genre.required' => 'genre diisi'
        ]);

        if ($request['gambar']) {
            $image = $request->file('gambar');
            $imageName = $image->getClientOriginalName();
            File::delete(public_path('/storage/public/buku') . $buku->gambar);
            $image->storeAs('public/buku', $imageName);
            
            $data['gambar'] = $imageName;
        }
        $buku->update($data);
        return redirect()->to('buku')->with('succes', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $buku = Buku::findOrFail($id);

        Storage::delete('/public/buku/' . $buku->image);

        $buku->delete();
        return redirect()->to('buku')->with('succes', 'Data Berhasil Dihapus');
    }
}
