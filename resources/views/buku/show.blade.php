<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background: lightgray">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     {{-- main --}}
 <main id="main" class="main">
    <div class="pagetitle">
        {{-- <a class="btn btn-primary" title="Create" role="button" aria-disabled="true"><i class="bi bi-plus"></i>Create</a> --}}
        <nav>
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    {{-- table --}}
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body-border-0 shadow sm-rounded">
                <h4 class="card-tittle">Show Detail</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun terbit</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Genre Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <?php $i = $buku->firstItem(); ?> --}}
                        {{-- @forelse($buku as $item) --}}
                        <tr>
                            {{-- <th>{{ $i }}</th> --}}
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penulis }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td>{{ $buku->tahun_terbit }}</td>
                            <td>{{ $buku->deskripsi }}</td>
                            <th><img src="{{ Storage::url('public/buku') . $buku->gambar }}" class="rounded" style="width: 165px"></th>
                            <td>{{ $buku->stok }}</td>
                            <td>{{ $buku->genre }}</td>
                            {{-- <td>
                                <a href="{{ url('buku/'. $item->id_buku) }}" class="btn btn-danger btn-sm" title="Show">View</a>
                                <a href="{{ url('buku/'. $item->id_buku . '/edit') }}" class="btn btn-warning btn-sm" title="Edit">Edit</a>
                                <form action="{{ url('buku/' . $item->id_buku) }}" class="d-inline" method="POST" onsubmit="return confirm('yakin akan menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Delete" name="submit" class="btn btn-secondary btn-sm"> Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                        {{-- <?php $i++; ?> --}}
                        {{-- @empty --}}
                            {{-- <div class="alert alert-danger" role="alert">
                                <button type="button" class="btn btn-danger">Data tidak tersedia</button>
                            </div> --}}
                        {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end table --}}
</main>
{{-- end main --}}
  </body>
</html>
{{-- @endsection --}}
