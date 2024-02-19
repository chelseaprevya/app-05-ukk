@extends('Admin.template')
@section('konten')
<main id="main" class="main">
    <div class="pagetitle">
        {{-- <h1>Table Buku</h1>
        <a class="btn btn-primary" title="Create" role="button" aria-disabled="true" href="{{ url('create') }}"><i class="bi bi-plus"></i>Create</a>
        <nav> --}}
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Form Tambah Data
            </h5> 

            {{-- form action --}}
            <form action="{{ url('buku') }}" method="POST" class="row-lg-3" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                  <label for="penulis" class="form-label">Penulis Buku</label>
                  <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit Buku</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <div class="col-cm-10">
                        <img class="img-preview img-fluid mb-3 col-sm-10 d-block" style="width: 450px; height: 280px;">
                        <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Buku</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="genre" name="genre">
                        <option selected>Open this select genre</option>
                        <option value="romance">Romance</option>
                        <option value="fantasy">Fantasy</option>
                        <option value="fiksi">Fiksi</option>
                        <option value="horor">Horor</option>
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</main>

@endsection