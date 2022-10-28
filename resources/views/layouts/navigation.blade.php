 <!-- ========== PRELOADER ========== -->
 {{-- <div class="loader loader3">
    <div class="loader-inner">
      <div class="spin">
        <span></span>
        <img src="/images/logo.svg" alt="Hotel Himara">
      </div>
    </div>
  </div> --}}

 <!-- ========== MOBILE MENU ========== -->
 <nav id="mobile-menu"></nav>
 <!-- ========== WRAPPER ========== -->
 {{-- <div class="wrapper"> --}}
 <!-- ========== TOP MENU ========== -->
 <div class="topbar">
     <div class="container">
         <div class="welcome-mssg">
             @foreach ($welcomemsg as $msg)
                 {{-- @if ($msg != null) --}}
                 {{ $msg->wlcmsg }}
                 {{-- @endif --}}
             @endforeach
         </div>
         <div class="top-right-menu">
             @foreach ($contactinfo as $info)
                 <ul class="top-menu">
                     <li class="d-none d-md-inline">
                         <a href="tel:+18881234567">
                             <i class="fa fa-phone"></i>{{ $info->phone }}
                         </a>
                     </li>
                     <li class="d-none d-md-inline">
                         <a href="mailto:contact@hotelhimara.com">
                             <i class="fa fa-envelope-o "></i>{{ $info->email }}</a>
                     </li>
                     <li class="language-menu">
                         <a href="#" class="active-language"><img src="/images/icons/flags/gb.png"
                                 alt="Image">English</a>
                         <ul class="languages">
                             <li class="language">
                                 <a href="#"><img src="/images/icons/flags/it.png" alt="Image">Italiano</a>
                             </li>
                             <li class="language">
                                 <a href="#"><img src="/images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                             </li>
                             <li class="language">
                                 <a href="#"><img src="/images/icons/flags/al.png" alt="Image">Shqip</a>
                             </li>
                             <li class="language">
                                 <a href="#"><img src="/images/icons/flags/fr.png" alt="Image">Français</a>
                             </li>
                             <li class="language">
                                 <a href="#"><img src="/images/icons/flags/es.png" alt="Image">Español</a>
                             </li>
                         </ul>
                     </li>
                 </ul>
             @endforeach
         </div>
     </div>
 </div>
 <!-- ========== HEADER ========== -->
 <header class="horizontal-header sticky-header" data-menutoggle="991">
     <div class="container">
         <!-- BRAND -->
         <div class="brand">
             <div class="logo">

                {{-- <img src="{{ asset('storage/about_images/thumbnail/' . $about->img) }}" class="footer-logo"
                    alt="Hotel Himara"> --}}
                    {{-- {{dd($aboutuse)}} --}}

                 <a href="{{url('homepage')}}">
                    @foreach($aboutuse as $about)
                     <img src="{{ asset('storage/about_images/thumbnail/'.$about->img) }}" alt="Hotel Himara">
                     @endforeach
                 </a>
                  {{-- {{dd($aboutuse)}} --}}
             </div>
         </div>
         <!-- MOBILE MENU BUTTON -->
         <div id="toggle-menu-button" class="toggle-menu-button">
             <span class="line"></span>
             <span class="line"></span>
             <span class="line"></span>
         </div>
         <!-- MAIN MENU -->
         <nav id="main-menu" class="main-menu">
             <ul class="menu">
                 <li class="menu-item dropdown active">
                     <a href="{{ url('homepage') }}">HOME</a>
                     {{-- @if (Auth::user()->role_id == 1) --}}

                     @can('accessadmin')
                         <ul class="submenu">
                             <li class="menu-item">
                                 <a href="{{ url('allHtitles') }}">All Titles</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createHtitles') }}">Create title</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('welcomemsg') }}">Welcome Message</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('about') }}">About info</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createabout') }}">Add about info</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('himaraservices') }}">Himara Services</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createHservice') }}">Add H-Service</a>
                             </li>

                             <li class="menu-item">
                                 <a href="{{ url('himaragallery') }}">Himara G-Head</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createHgal') }}">Add an H-G Head</a>
                             </li>

                             <li class="menu-item">
                                 <a href="{{ url('himaraPV') }}">Himara Photo & Video</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createPV') }}">Add Photo & Video</a>
                             </li>
                             {{-- restaurent --}}
                             <li class="menu-item">
                                 <a href="{{ url('himarares') }}">Himara Restaurent</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createHres') }}">Add dishes</a>
                             </li>
                             {{-- latestnews --}}
                             <li class="menu-item">
                                 <a href="{{ url('latestnews') }}">Latestnews</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createLnews') }}">Add news</a>
                             </li>
                         </ul>
                     @endcan
                     {{-- @endif --}}
                 </li>
                 {{-- himarares --}}

                 <li class="menu-item dropdown">
                     <a href="{{ url('rooms') }}">Rooms</a>

                     @can('accesseditor')

                         <ul class="submenu">
                             <li class="menu-item">
                                 <a href="{{ url('createroom') }}">Add room</a>
                             </li>
                             <li class="menu-item">
                                 @can('accessadmin')
                                     <a href="{{ url('createroomservices') }}">Add R-services</a>
                                 @endcan
                             </li>
                             {{-- <li class="menu-item">
                                 <a href="#">Room service</a>
                             </li> --}}
                             <li class="menu-item">
                                 <a href="{{ url('allrooms') }}">All Rooms</a>
                             </li>
                             <li class="menu-item">
                                 @can('accessadmin')
                                     <a href="{{ url('roomsnotvalide') }}">Rooms Not Valided</a>
                                 @endcan
                             </li>
                         </ul>

                     @endcan
                 </li>
                 <li class="menu-item dropdown">
                     <a href="{{ url('teams') }}">TEAM</a>
                     @can('accessadmin')
                         <ul class="submenu">
                             <li class="menu-item">
                                 <a href="{{ url('allmembers') }}">All Members</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createmember') }}">Add a Member</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('users') }}">Users</a>
                             </li>
                         </ul>
                     @endcan
                 </li>
                 <li class="menu-item dropdown">
                     <a href="{{ url('gallery') }}">GALLERY</a>
                     @can('accessadmin')
                         <ul class="submenu">
                             <li class="menu-item">
                                 <a href="{{ url('allimg') }}">All Gallery</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createimg') }}">Add un image</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('category') }}">Categories</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createcat') }}">Add a category</a>
                             </li>

                             <li class="menu-item">
                                 <a href="{{ url('slider') }}">Sliders</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('createslider') }}">Add a slider</a>
                             </li>
                         </ul>
                     @endcan
                 </li>
                 <li class="menu-item dropdown">
                     <a href="{{ url('contact') }}">contact us</a>.
                     @can('accessadmin')
                         <ul class="submenu">
                             <li class="menu-item">
                                 <a href="{{ url('messagerecieved') }}">Messages</a>
                             </li>
                             <li class="menu-item">
                                 <a href="{{ url('editcontactinformation') }}">Edit contact info</a>
                             </li>
                         </ul>
                     @endcan
                 </li>
                 <li class="menu-item dropdown">
                     {{-- @can('accessadmin') --}}
                     <a href="{{ url('bookings') }}">Bookings</a>
                     {{-- @endcan --}}
                 </li>

                 @if (Route::has('login'))
                     @auth
                         {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}

                         <li class="menu-item menu-btn">
                             <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                 <a :href="route('logout')"
                                     onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                     class="btn">
                                    @guest
                                    <i class="fa fa-user"></i>
                                    @endguest
                                    @auth
                                      <img style="Width:20px; height:20px;border-radius: 16px;" src="/{{('storage/user_images/thumbnail/' .Auth::user()->img)}}">
                                    @endauth

                                     {{ __('Log Out') }}
                                 </a>
                             </form>
                         </li>
                     @else
                         <li class="menu-item menu-btn">
                             <a href="{{ route('login') }}">Log in</a>
                         </li>
                         @if (Route::has('register'))
                             <li class="menu-item">
                                 {{-- <a href="{{ route('register') }}" class="">Sign up</a> --}}
                                 <a href="{{ url('createuser') }}" class="">Sign up</a>

                             </li>
                         @endif
                     @endauth
                 @endif
             </ul>
         </nav>
     </div>
 </header>
 {{-- </div> --}}
