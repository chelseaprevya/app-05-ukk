@extends('Admin.template')
@section('konten')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table Buku</h1>
        <a class="btn btn-primary mt-2 " title="Create" role="button" aria-disabled="true" href="{{ url('/user/create') }}"><i
                class="bi bi-plus"></i>Create</a>
        <nav>
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Telepon</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->no_telp}}</td>
                <td>{{$item->role}}</td>
                <td>
                    <a href="/user/update/{{$item->id}}" class="btn btn-warning btn-sm bi bi-pencil"
                        title="Edit"></a>
                        @if($item->role != 'admin')     
                        <form action="/user/delete/{{$item->id}}" class="d-inline" method="POST"
                            onsubmit="return confirm('yakin akan menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Delete" name="submit" class="btn btn-secondary btn-sm bi bi-trash">
                                </button>
                        </form>
                        @endif
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </main>
@endsection