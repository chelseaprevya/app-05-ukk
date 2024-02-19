@extends('layout.template')
@section('konten')
     
<!-- Breadcrumb Begin -->
   <div class="breadcrumb-option">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="breadcrumb__links">
                       <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                       <a href="./categories.html">Categories</a>
                       <span>Romance</span>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
       <div class="container">
           <div class="anime__details__content">
               <div class="row">
                   <div class="col-lg-3">
                       <div class="anime__details__pic set-bg" data-setbg="img/trending/roman-1.jpg">
                       </div>
                   </div>
                   <div class="col-lg-9">
                       <div class="anime__details__text">
                           <div class="anime__details__title">
                               <h3>It Ends With Us - Collen Hoover</h3>
                               <span>Sinopsis</span>
                           </div>
                           <div class="anime__details__rating">
                               <div class="rating">
                                   <a href="#"><i class="bi bi-star-fill"></i></a>
                                   <a href="#"><i class="bi bi-star-fill"></i></a>
                                   <a href="#"><i class="bi bi-star-fill"></i></a>
                                   <a href="#"><i class="bi bi-star-fill"></i></a>
                                   <a href="#"><i class="bi bi-star-half"></i></a>
                               </div>
                               <span>1.029 Votes</span>
                           </div>
                           <p>Novel It End With Us menceritakan sebuah kisah romantis yang terinspirasi dari kisah nyata Colleen Hoover, lebih tepatnya dari hasil observasi Colleen Hoover pada kehidupan orang tuanya sendiri. Novel ini berkisah tentang rasa sayang dan cinta antara seorang wanita bernama Lily dan seorang lelaki yang belum lama dikenalnya, yaitu Ryle.

                               Lily dan Ryle saling mencintai dan membangun kehidupan keluarga kecil mereka. Inti kisah yang diceritakan pada novel ini, yaitu kerinduan untuk membangun sebuah keluarga yang damai dan harmonis.</p>
                           <div class="anime__details__widget">
                               <div class="row">
                                   <div class="col-lg-6 col-md-6">
                                       <ul>
                                           <li><span>Genre:</span> Romace, Love</li>
                                           <li><span>Pages:</span> 240 pages</li>
                                           <li><span>Author:</span> Colleen Hoover</li>
                                           <li><span>Stok:</span> 5</li>
                                       </ul>
                                   </div>
                                   {{-- <div class="col-lg-6 col-md-6">
                                       <ul>
                                           <li><span>Scores:</span> 7.31 / 1,515</li>
                                           <li><span>Rating:</span> 8.5 / 161 times</li>
                                           <li><span>Duration:</span> 24 min/ep</li>
                                           <li><span>Quality:</span> HD</li>
                                           <li><span>Views:</span> 131,541</li>
                                       </ul>
                                   </div> --}}
                               </div>
                           </div>
                           <div class="anime__details__btn">
                               {{-- <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Pesan Buku</a>
                                 </i></a> --}}
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               {{-- <div class="row">
                   <div class="col-lg-8 col-md-8">
                       <div class="anime__details__review">
                           <div class="section-title">
                               <h5>Reviews</h5>
                           </div>
                           <div class="anime__review__item">
                               <div class="anime__review__item__pic">
                                   <img src="img/anime/review-1.jpg" alt="">
                               </div>
                               <div class="anime__review__item__text">
                                   <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                   <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                   "demons" LOL</p>
                               </div>
                           </div>
                           <div class="anime__review__item">
                               <div class="anime__review__item__pic">
                                   <img src="img/anime/review-2.jpg" alt="">
                               </div>
                               <div class="anime__review__item__text">
                                   <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                   <p>Finally it came out ages ago</p>
                               </div>
                           </div>
                           <div class="anime__review__item">
                               <div class="anime__review__item__pic">
                                   <img src="img/anime/review-3.jpg" alt="">
                               </div>
                               <div class="anime__review__item__text">
                                   <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                   <p>Where is the episode 15 ? Slow update! Tch</p>
                               </div>
                           </div>
                           <div class="anime__review__item">
                               <div class="anime__review__item__pic">
                                   <img src="img/anime/review-4.jpg" alt="">
                               </div>
                               <div class="anime__review__item__text">
                                   <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                   <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                   "demons" LOL</p>
                               </div>
                           </div>
                           <div class="anime__review__item">
                               <div class="anime__review__item__pic">
                                   <img src="img/anime/review-5.jpg" alt="">
                               </div>
                               <div class="anime__review__item__text">
                                   <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                   <p>Finally it came out ages ago</p>
                               </div>
                           </div>
                           <div class="anime__review__item">
                               <div class="anime__review__item__pic">
                                   <img src="img/anime/review-6.jpg" alt="">
                               </div>
                               <div class="anime__review__item__text">
                                   <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                   <p>Where is the episode 15 ? Slow update! Tch</p>
                               </div>
                           </div>
                       </div>
                       <div class="anime__details__form">
                           <div class="section-title">
                               <h5>Your Comment</h5>
                           </div>
                           <form action="#">
                               <textarea placeholder="Your Comment"></textarea>
                               <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                           </form>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4">
                       <div class="anime__details__sidebar">
                           <div class="section-title">
                               <h5>you might like...</h5>
                           </div>
                           <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-1.jpg">
                               <div class="ep">18 / ?</div>
                               <div class="view"><i class="fa fa-eye"></i> 9141</div>
                               <h5><a href="#">Boruto: Naruto next generations</a></h5>
                           </div>
                           <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-2.jpg">
                               <div class="ep">18 / ?</div>
                               <div class="view"><i class="fa fa-eye"></i> 9141</div>
                               <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                           </div>
                           <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-3.jpg">
                               <div class="ep">18 / ?</div>
                               <div class="view"><i class="fa fa-eye"></i> 9141</div>
                               <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                           </div>
                           <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-4.jpg">
                               <div class="ep">18 / ?</div>
                               <div class="view"><i class="fa fa-eye"></i> 9141</div>
                               <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                           </div>
                       </div>
                   </div>
               </div> --}}
           </div>
       </section>
       <!-- Anime Section End -->
@endsection


  