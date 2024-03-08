@extends('Admin.template')
@section('konten')
<main>
     {{-- main --}}
     <main id="main" class="main">

        <div class="pagetitle">
            <h1>Table Peminjaman</h1>
            <a class="btn btn-primary mt-2 " title="Create" role="button" aria-disabled="true" href="{{ url('peminjaman/create') }}"><i
                    class="bi bi-plus"></i>Create</a>
            <a class="btn btn-secondary mt-2" title="Cetak" role="button" aria-disabled="true" href="/struk"><i
                      class="bi bi-printer"></i></a>
            <nav>
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

         <!-- Table with stripped rows -->
         <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Peminjam</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($peminjaman as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$item->buku->judul}}</td>
                <td>{{$item->user->name}}</td>
                <td>{{$item->tanggal_pinjam}}</td>
                <td>{{$item->tanggal_kembali}}</td>
                <td>{{$item->jumlah}}</td>
                <td>
                  @if($item->status == '0')
                    Di kembalikan
                    @else
                    Di pinjam
                  @endif
                </td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    @if($item->status == '0')
                    <button class="btn btn-primary btn-sm bi bi-pencil"
                    title="Kembalikan" disabled></button>
                    @else

                    <form action="/peminjaman/update/{{$item->id}}" method="POST">
                      @csrf
                      @method('put')
                      <button class="btn btn-warning btn-sm bi bi-pencil"
                      title="Kembalikan"></button>
                    </form>
                    @endif
                  </div>
                  <a class="btn btn-secondary mt-2" title="Cetak" role="button" aria-disabled="true" href="/struk/one/{{$item->id}}"><i
                    class="bi bi-printer"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
</main>
@endsection