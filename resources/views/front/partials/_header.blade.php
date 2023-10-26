 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <a href="index.html" class="logo d-flex align-items-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="assets/img/logo.png" alt=""> -->
             <h1>ZenBlog</h1>
         </a>
         <nav id="navbar" class="navbar">
             <ul>
                 <li><a href="{{ route('blog') }}">Blog</a></li>
                 <li><a href="{{ route('singleBloge') }}">Single Post</a></li>
                 <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                     <ul>
                         @foreach ( $categories as $key => $category )
                             <li><a href="{{ route('category', $category) }}">{{ $category->name }}  {{ $category->posts_count }}</a></li>
                         @endforeach
                     </ul>
                 </li>
                 <li><a href="{{ route('about') }}">About</a></li>
                 <li><a href="{{ route('contact') }}">Contact</a></li>
             </ul>
         </nav><!-- .navbar -->
          <div class="position-relative d-flex gap-3">
            <ul class="m-auto d-flex  list-unstyled gap-3">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown d-flex gap-2" >
                                  <span class="nav-item" style="height: 30px; width: 30px; border-radius: 50%;">
                                        <div class="photo" style="object-fit:cover; border-radius: 50%;"><img src='{{ asset('projects/auth/img/'. Auth::user()->imgUrl) }}"' alt="" class="img-fluid"></div>
                                  </span>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('updateprofil',  Auth::user() ) }}">Edit Profil</a>
                                </div>
                            </li>
                        @endguest
            </ul>
             <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
             <i class="bi bi-list mobile-nav-toggle"></i>

             <!-- ======= Search Form ======= -->
             <div class="search-form-wrap js-search-form-wrap">
                 <form action="search-result.html" class="search-form">
                     <span class="icon bi-search"></span>
                     <input type="text" placeholder="Search" class="form-control">
                     <button class="btn js-search-close"><span class="bi-x"></span></button>
                 </form>
             </div><!-- End Search Form -->

         </div>
     </div>
 </header><!-- End Header -->