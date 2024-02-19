@extends('layout.template')
@section('konten')
 <!-- Hero Section Begin -->
 <section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/library.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            {{-- <div class="label">Adventure</div> --}}
                            <h2>Selamat datang di pintu gerbang ilmu pengetahuan!</h2>
                            <p>Temukan semua buku disini!</p>
                            {{-- <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/buku.jpg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            {{-- <div class="label">Adventure</div> --}}
                            <h2>Sambut kecerdasan dan kreativitas di setiap halaman.</h2>
                            <p>After 30 days of travel across the world...</p>
                            {{-- <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/trending/harry-potter.jpg">
                                    {{-- <div class="ep">18 / 18</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Fantasy</li>
                                        <li>Action</li>
                                    </ul>
                                    <h5><a href="#">Harry Potter And The Prisioner of Azkaban</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/trending/roman-1.jpg">
                                    {{-- <div class="ep">18 / 18</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Romance</li>
                                        <li>Love</li>
                                    </ul>
                                    <h5><a href="#">It Ends With Us - Collen Hoover</a></h5>
                                    <ul>
                                       <a class="btn btn-primary" href="{{ url('detailbuku') }}" role="button">More</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/trending/self-improvement.jpg">
                                    {{-- <div class="ep">18 / 18</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Self Improvement</li>
                                        <li>Self Development</li>
                                    </ul>
                                    <h5><a href="#">What's So Wrong About You - Self Healing</a></h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
               
            </div>
           
</div>
</div>
</section>
<!-- Product Section End -->

@endsection

