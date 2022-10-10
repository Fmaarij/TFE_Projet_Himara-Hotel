 <!-- ========== PRELOADER ========== -->
 <div class="loader loader3">
    <div class="loader-inner">
      <div class="spin">
        <span></span>
        <img src="/images/logo.svg" alt="Hotel Himara">
      </div>
    </div>
  </div>
  <!-- ========== MOBILE MENU ========== -->
  <nav id="mobile-menu"></nav>
  <!-- ========== WRAPPER ========== -->
  <div class="wrapper">
    <!-- ========== TOP MENU ========== -->
    <div class="topbar">
      <div class="container">
        <div class="welcome-mssg">
          Welcome to Hotel Himara.
        </div>
        <div class="top-right-menu">
          <ul class="top-menu">
            <li class="d-none d-md-inline">
              <a href="tel:+18881234567">
                <i class="fa fa-phone"></i>+1 888 123 4567
              </a>
            </li>
            <li class="d-none d-md-inline">
              <a href="mailto:contact@hotelhimara.com">
                <i class="fa fa-envelope-o "></i>contact@hotelhimara.com</a>
            </li>
            <li class="language-menu">
              <a href="#" class="active-language"><img src="/images/icons/flags/gb.png" alt="Image">English</a>
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
        </div>
      </div>
    </div>
    <!-- ========== HEADER ========== -->
    <header class="horizontal-header sticky-header" data-menutoggle="991">
      <div class="container">
        <!-- BRAND -->
        <div class="brand">
          <div class="logo">
            <a href="index.html">
              <img src="/images/logo.svg" alt="Hotel Himara">
            </a>
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
              <a href="{{url('homepage')}}">HOME</a>
            </li>

            <li class="menu-item dropdown">
                <a href="{{url('rooms')}}">Rooms</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="{{url('createroom')}}">Add a room</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('createroomservices')}}">Add room services</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Room service</a>
                  </li>
                </ul>
              </li>
            <li class="menu-item dropdown">
              <a href="{{url('teams')}}">TEAM</a>
              <ul class="submenu">
                <li class="menu-item">
                  <a href="{{url('allmembers')}}">All Members</a>
                </li>
                <li class="menu-item">
                  <a href="{{url('createmember')}}">Add a Member</a>
                </li>
              </ul>
            </li>
            <li class="menu-item dropdown">
              <a href="{{url('gallery')}}">GALLERY</a>
              <ul class="submenu">
                <li class="menu-item">
                  <a href="{{url('allimg')}}">All Gallery</a>
                </li>
                <li class="menu-item">
                  <a href="{{url('createimg')}}">Add un image</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('category')}}">Categories</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('createcat')}}">Add a category</a>
                  </li>
              </ul>
            </li>
            <li class="menu-item dropdown">
                <a href="{{url('contact')}}">contact us</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="{{url('messagerecieved')}}">Messages</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('editcontactinformation')}}">Edit contact info</a>
                  </li>
                </ul>
              </li>

            @if (Route::has('login'))
                @auth
                {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}

                <li class="menu-item menu-btn">
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" class="btn">
                <i class="fa fa-user"></i>
                            {{ __('Log Out') }}
                    </a>
                </form>
                </li>
                  @else
                  <li class="menu-item menu-btn">
                      <a href="{{ route('login') }}" >Log in</a>
                  </li>
                    @if (Route::has('register'))
                    <li class="menu-item">
                        <a href="{{ route('register') }}" class="">Sign up</a>
                    </li>
                    @endif
                @endauth
        @endif
          </ul>
        </nav>
      </div>
    </header>
