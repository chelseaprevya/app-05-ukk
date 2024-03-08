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
            <form action="/user/update/{{$user->id}}" method="POST" class="row-lg-3">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ old('no_telp', $user->no_telp) }}">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="role" name="role">
                        <option selected>Open this select role</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="petugas" {{ $user->role == 'petugas' ? 'selected' : '' }}>Petugas</option>
                        <option value="peminjam" {{ $user->role == 'peminjam' ? 'selected' : '' }}>Peminjam</option>
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

@endsection