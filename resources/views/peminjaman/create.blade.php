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
            <form action="/peminjaman/create" method="POST" class="row-lg-3" >
                @csrf
                <div class="mb-3">
                    <label for="id_buku" class="form-label">Nama Buku</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="id_buku" name="id_buku">
                        @foreach ($buku as $item)
                        <option value="{{$item->id_buku}}">{{$item->judul}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="id_user" class="form-label">Peminjam</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="id_user" name="id_user">
                        @foreach ($user as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
                </div>
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
                    <input type="text" class="form-control" id="status" name="status" value="1" hidden>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

@endsection
