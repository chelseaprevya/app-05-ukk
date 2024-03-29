 <!-- Header Section Begin -->
 <header class="header">
     <div class="container">
         <div class="row">
             <div class="col-lg-2">
                 <div class="header__logo">
                     <a href="./index.html">
                         <img src="img/logo.png" alt="">
                     </a>
                 </div>
             </div>
             <div class="col-lg-8">
                 <div class="header__nav">
                     <nav class="header__menu mobile-menu">
                         <ul>
                             <li class="active"><a href="{{ url('/') }}">Homepage</a></li>
                             <li><a href="{{ url('indexkategori') }}">Categories <span
                                         class="arrow_carrot-down"></span></a>
                                 <ul class="dropdown">
                                     @auth
                                         <li><a href="{{ url('indexkategori') }}">Categories</a></li>
                                         <li><a href="{{ url('detail') }}">Anime Details</a></li>
                                         <li class="nav-item">
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                  
                                                <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                                    class="nav-link collapsed">
                                                    {{ __('Log Out') }}
                                                </x-responsive-nav-link>
                                            </form>
                                            <!-- Authentication -->
                                        </li><!-- End Login Page Nav -->
                                     @endauth

                                     {{-- ./anime-details.html --}}
                                     <li><a href="./anime-watching.html">Anime Watching</a></li>
                                     <li><a href="./blog-details.html">Blog Details</a></li>
                                     @guest
                                         <li><a href="{{ route('register') }}">Register</a></li>
                                         <li><a href="{{ route('login') }}">Login</a></li>
                                     @endguest
                                 </ul>
                             </li>
                             @auth
                                 
                             <li><a href="{{route('koleksi.index')}}">Koleksi</a></li>
                             @endauth
                         </ul>
                     </nav>
                 </div>
             </div>
             <div class="col-lg-2">
                 <div class="header__right">
                     <a href="#" class="search-switch"><span class="icon_search"></span></a>
                     <a href="./login.html"><span class="icon_profile"></span></a>
                 </div>
             </div>
         </div>
         <div id="mobile-menu-wrap"></div>
     </div>
 </header>
 <!-- Header End -->
