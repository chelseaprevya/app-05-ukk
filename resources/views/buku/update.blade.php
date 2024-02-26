<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background: lightgray">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
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
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Form Update Data
                    </h5>
                    {{-- form action --}}
                    <form action="{{ url('buku/' . $buku->id_buku) }}" method="POST" class="row-lg-3"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ old('judul', $buku->judul) }}">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis Buku</label>
                            <input type="text" class="form-control" id="penulis" name="penulis"
                                value="{{ old('penulis', $buku->penulis) }}">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit"
                                value="{{ old('penerbit', $buku->penerbit) }}">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit"
                                value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                value="{{ old('deskripsi', $buku->deskripsi) }}">
                        </div>
                        <div class="col-12">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                @if ($buku->gambar)
                                    <img src="{{ asset('/storage/buku') . $buku->gambar }}" alt=""
                                        class="img-preview img-fluid mb-3 col-sm-10 d-block"
                                        style="width: auto; height: 480px;">
                                    <input type="hidden" name="oldImage" value="">
                                    {{-- <img src="{{ env('APP_ASSETS_URL') . $buku->gambar }}" alt=""
                                        class="img-preview img-fluid mb-3 col-sm-10 d-block"
                                        style="width: auto; height: 480px;">
                                    <input type="hidden" name="oldImage" value=""> --}}
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-10 d-block"
                                        style="width: auto; height: 480px;">
                                @endif
                                <input class="form-control" type="file" id="gambar" name="gambar"
                                    onchange="previewImage()">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok Buku</label>
                            <input type="text" class="form-control" id="stok" name="stok"
                                value="{{ old('stok', $buku->stok) }}">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="genre" name="genre" value="{{ old('genre', $buku->genre) }}">
                                <option selected>Open this select genre</option>
                                <option value="romance" {{ $buku->genre == 'romance' ? 'selected' : '' }}>Romance
                                </option>
                                <option value="fantasy" {{ $buku->genre == 'fantasy' ? 'selected' : '' }}>Fantasy
                                </option>
                                <option value="fiksi" {{ $buku->genre == 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                                <option value="horor" {{ $buku->genre == 'horor' ? 'selected' : '' }}>Horor</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
