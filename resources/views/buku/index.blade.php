@extends('Admin.template')
@section('konten')
    {{-- main --}}
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table Buku</h1>
        <a class="btn btn-primary disabled" title="Create" role="button" aria-disabled="true"><i class="bi bi-plus"></i>Create</a>
        <nav>
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    {{-- table --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun terbit</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Stok</th>
                <th scope="col">Id kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=$buku->$firstItem() ?>

            @forelse($buku as $item)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->penerbit }}</td>
                <td>{{ $item->tahun_terbit }}</td>
                <td>{{ $item->deskripsi }}</td>
                <th><img src="{{ Storage::url('public/buku').$item->gambar }}" class="rounded" style="width: 165px"></th>
                <td>{{ $item->stok }}</td>
                <td>
                    <a href="{{ url('buku/' $item->id_buku) }}" class="btn btn-succes btn-sm" title="View"></a>
                    <a href="{{ url('buku/' $item->id_buku . '/edit') }}" class="btn btn-warning btn-sm" title="Edit"></a>
                    <form action="{{ url('buku/' . $item->id_buku) }}" class="d-inline" method="POST" onsubmit="return confirm('yakin akan menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Delete" name="submit" class="btn btn-secondary"></button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @empty
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="btn btn-danger">Data tidak tersedia</button>
                </div>
            @endforelse
            
            {{-- </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr> --}}
        </tbody>
    </table>
    {{-- end table --}}
</main>
{{-- end main --}}
@endsection