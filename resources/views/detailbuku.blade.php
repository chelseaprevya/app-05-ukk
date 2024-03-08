@extends('layout.template')
@section('konten')
     
<!-- Breadcrumb Begin -->
   <div class="breadcrumb-option">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   {{-- <div class="breadcrumb__links">
                       <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                       <a href="./categories.html">Categories</a>
                       <span>Romance</span>
                   </div> --}}
               </div>
           </div>
       </div>
   </div>
   <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details ```````````````````````````````````````spad">
       <div class="container">
           <div class="anime__details__content">
               <div class="row">
                   <div class="col-lg-3">
                       <div class="anime__details__pic set-bg" data-setbg="{{asset('storage/public/buku/'. $buku->gambar)}}">
                       </div>
                   </div>
                   <div class="col-lg-9">
                       <div class="anime__details__text">
                           <div class="anime__details__title">
                               <h3>{{$buku->judul}}</h3>
                               <span>Sinopsis</span>
                           </div>
                           <p>{{$buku->deskripsi}}</p>
                           <div class="anime__details__widget">
                               <div class="row">
                                   <div class="col-lg-6 col-md-6">
                                       <ul>
                                           <li><span>Genre:</span> {{$buku->genre}}</li>
                                           <li><span>Penulis:</span>{{$buku->penulis}}</li>
                                           <li><span>Penerbit:</span>{{$buku->penerbit}}</li>
                                           <li><span>Tahun terbit:</span>{{$buku->tahun_terbit}}</li>
                                           <li><span>Stok:</span>{{$buku->stok}}</li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <div class="anime__details__btn">
                            @if ($koleksi)
                            <form action="{{route('koleksi.destroy', $koleksi->id_koleksi)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <input type="hidden" name="id_buku" value="{{$buku->id_buku}}">
                                <input type="hidden" name="id_user" value="{{Auth::id()}}"> --}}
                                <button type="submit" class="btn btn-danger">Hapus koleksi</button>
                            </form>
                            @else
                            <form action="{{route('koleksi.store')}}" method="post">
                                @csrf
                                <input type="hidden" name="id_buku" value="{{$buku->id_buku}}">
                                <input type="hidden" name="id_user" value="{{Auth::id()}}">
                                <button type="submit" class="btn btn-secondary">tambah koleksi</button>
                            </form>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>
       <!-- Anime Section End -->
@endsection


  