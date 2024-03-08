@extends('layout.template')
@section('konten')
            <section class="product spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending__product">
                                <div class="row">
                                    {{-- @dump($koleksi) --}}
                                    @foreach ($koleksi as $item)    
                                    <p>{{$item->buku->judul}}</p>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <img src="../storage/public/buku/{{$item->buku->gambar}}" alt="">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('/public/buku/'. $item->buku->gambar)}}">
                                                
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>{{$item->genre}}</li>
                                                </ul>
                                                <h5><a href="#">{{$item->judul}}</a></h5>
                                            </div>
                                        </div>
                                    </div>  
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection