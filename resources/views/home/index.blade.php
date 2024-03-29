@extends('layouts.app')
@section('content')
    <!-- ========== REVOLUTION SLIDER ========== -->

    <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
            <ul>
                <!-- SLIDE NR. 1 -->
                {{-- @foreach ($sliders as $slide) --}}
                @foreach ($slidersothers as $slide)

            {{-- @endforeach --}}
                {{-- @foreach ($slidersothers as $slide) --}}
                    <li data-transition="crossfade">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('storage/slider_images/thumbnail/' . $slide->img) }}" alt="Image" title="Image"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                            class="rev-slidebg" data-no-retina="">
                        <!-- LAYER NR. 1 -->
                        <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
                            data-responsive_offset="on" data-fontsize="['80','50','40','30']"
                            data-lineheight="['60','50','40','30']" data-whitespace="nowrap"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 5; color: #fff; font-weight: 900;">
                            {{ $slide->title1 }}</h1>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
                            data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
                            data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; color: #fff;">{{ $slide->title2 }}</div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption" data-x="center" data-hoffset="-120" data-y="480" data-voffset=""
                            data-responsive_offset="on" data-whitespace="nowrap"
                            data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 11;">
                            <a class="btn" href="{{ url('createbookings') }}">
                                <i class="fa fa-calendar"></i>BOOK A ROOM NOW</a>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption" data-x="center" data-hoffset="128" data-y="480" data-voffset=""
                            data-responsive_offset="on" data-whitespace="nowrap"
                            data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 11;">
                            <a class="btn" href="{{ url('contact') }}">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>CONTACT US NOW</a>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="200"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['18','18','16','16']"
                            data-lineheight="['18','18','16','16']" data-whitespace="nowrap"
                            data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="color: #fff">
                            <i class="fa fa-star voted-o"></i>
                            <i class="fa fa-star voted-o"></i>
                            <i class="fa fa-star voted-o"></i>
                            <i class="fa fa-star voted-o"></i>
                            <i class="fa fa-star voted-o"></i>
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="240"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['25','25','18','18']"
                            data-lineheight="['25','25','18','18']" data-whitespace="nowrap"
                            data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="color: #fff">
                            {{ $slide->title3 }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- ========== BOOKING FORM ========== -->
        <div class="horizontal-booking-form">
            <div class="container">
                <div class="inner box-shadow-007">
                    <!-- ========== BOOKING NOTIFICATION ========== -->
                    <div id="booking-notification" class="notification"></div>
                    <form action="/storebooking" method="post" enctype="multipart/form-data">
                        <!-- NAME -->
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Name
                                        <a href="#" title="Your Name" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please type your first name and last name">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                  @auth
                                    <input class="form-control" value="{{ Auth::user()->name }}" readonly="readonly"
                                    name="booking_name" type="text" data-trigger="hover"
                                    placeholder="Write Your Name">
                                @endauth
                                @guest
                                    <input class="form-control" placeholder="James"
                                    name="booking_name" type="text" data-trigger="hover"
                                    placeholder="Write Your Name">

                                    @endguest
                                </div>
                            </div>
                            <!-- EMAIL -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Email
                                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please type your email adress">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    @auth
                                    <input class="form-control" value="{{ Auth::user()->email }}" readonly="readonly"
                                    name="booking_email" type="email" placeholder="Write your Email">
                                    @endauth
                                 @guest


                                    <input class="form-control" placeholder="James@gmail.com"  name="booking_email" type="email"
                                    placeholder="Write your Email">
                                    @endguest

                                </div>
                            </div>
                            <!-- ROOM TYPE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Room Type
                                        <a href="#" title="Room Type" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please select room type">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <select name="room_id" class="form-control" title="Select A Room "
                                        data-header="Select Room Type">
                                        @foreach ($roomz as $room)
                                            @if ($room->checkin == 0 && $room->checkout == 0)
                                                <option value="{{ $room->id }}"
                                                    data-subtext="<span class='badge badge-info'>€

                                            {{ $room->price }},

                                            / night</span>">
                                                    {{ $room->typeofroom->type_name }}
                                            @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- DATE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Check-In/Out
                                        <a href="#" title="Check-In / Check-Out" data-toggle="popover"
                                            data-placement="top" data-trigger="hover"
                                            data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input type="text" class="datepicker form-control" name="booking_date"
                                        placeholder="Arrival & Departure" readonly="readonly">
                                </div>
                            </div>
                            <!-- GUESTS -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Guests
                                        <a href="#" title="Guests" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please Select Adults / Children">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <div class="panel-dropdown">
                                        <div class="form-control guestspicker">Guests
                                            <span class="gueststotal"></span>
                                        </div>
                                        <div class="panel-dropdown-content">
                                            <div class="guests-buttons">
                                                <label>Adults
                                                    <a href="#" title="" data-toggle="popover"
                                                        data-placement="top" data-trigger="hover"
                                                        data-content="18+ years" data-original-title="Adults">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="booking_adult" class=""
                                                        value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                            <div class="guests-buttons">
                                                <label>Cildren
                                                    <a href="#" title="" data-toggle="popover"
                                                        data-placement="top" data-trigger="hover"
                                                        data-content="Under 18 years" data-original-title="Children">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="booking_child" class=""
                                                        value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BOOKING BUTTON -->
                            <div class="col-md-2">
                            @auth
                                <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                            @endauth
                                @guest
                                    <a href="{{ route('login') }}">
                                        <p class="btn btn">LOG IN</p></a>
                                        @endguest
                                <div class="advanced-form-link">
                                    @auth

                                        <a href="{{ url('bookings') }}">
                                            Advanced Booking Form
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== ABOUT ========== -->
    <section class="about mt100">
        <div class="container">
            <div class="row">
                @foreach ($abouts as $about)
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h4 class="text-uppercase">{!!$about->title!!} <span
                                    class="text-himara">{{ $about->year }}</span></h4>
                            <p class="section-subtitle">{{ $about->subpara }}</p>
                        </div>

                        <div class="info-branding">
                            <p>{{ $about->para }}</p>
                            @php $providers = $about->provider ? json_decode($about->provider, true) : []; @endphp
                            <div class="providers">
                                <span>Recommended on:</span>
                                @if($providers != null)
                                @foreach ($providers as $provid)
                                    <!-- ITEM -->
                                    <div class="item">
                                        <a href="#">
                                            <img alt="pic"
                                                src="{{ asset('storage/about_images/thumbnail/' . $provid) }}">
                                        </a>
                                    </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="brand-info">
                            <div class="inner">
                                <div class="content">
                                    <img src="{{ asset('storage/about_images/thumbnail/' . $about->img) }}"
                                        width="100" alt="Image">
                                    <div class="stars">
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="title">{{ $about->imgtitle }}</h5>
                                    <p class="mt20">{{ $about->imgpara }}</p>
                                </div>

                            </div>
                        </div>
                @endforeach
            </div>
        </div>

        </div>
    </section>
    <!-- ========== ROOMS ========== -->
    <section class="rooms gray">
        <div class="container">
            <div class="section-title">
                <h4>OUR <span class="text-himara">ROOMS</span></h4>
                <p class="section-subtitle">Our favorite rooms</p>
                <a href="{{ url('rooms') }}" class="view-all">View all rooms</a>
            </div>
            <div class="row">
                <!-- ITEM -->
                @if ($room != null)
                @foreach ($rooms as $room)
                    <div class="col-md-4">
                        <div class="room-grid-item">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="/{{ $room->id }}/showroom">
                                    <img src="{{ asset('storage/room_images/thumbnail/' . $room->img) }}"
                                        class="img-fluid" alt="Image">
                                </a>
                                <div class="room-services">
                                    @php $categories = $room->service ? json_decode($room->service, true) : []; @endphp

                                    @if ($categories != null)
                                        @foreach ($categories as $category)
                                            <i class="{{ $category }}", class="aria-hidden=true"
                                                data-toggle="popover" data-placement="right" data-trigger="hover"></i>
                                            {{-- @else
                                        <p>nothing</p> --}}
                                        @endforeach
                                    @endif
                                </div>
                                <div class="room-price">€{{ $room->price }} / night</div>
                            </figure>
                            <div class="room-info">
                                <h2 class="room-title">
                                    <a href="#">{{ $room->typeofroom->type_name }}</a>
                                </h2>
                                <p>Enjoy our {{ $room->typeofroom->type_name }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- ========== SERVICES ========== -->
    @if ($himaraservices != null)
    <section class="services">
        <div class="container">
            <div class="section-title">
                {{-- {{dd($himaraservicetitle)}} --}}

                @foreach ($himaraservicetitle as $title )
                <h4>{!! $title->title !!} <span
                    class="text-himara">{{ $title->coloredpart }}</span></h4>

                    <p class="section-subtitle">{{ $title->subpara }}</p>
                    @endforeach
            </div>
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div data-slider-id="services" class="services-owl owl-carousel">
                        @foreach ($himaraservices as $serv)
                            <figure class="gradient-overlay">
                                <img src="{{ asset('storage/himara_images/thumbnail/' . $serv->img) }}" class="img-fluid"
                                    alt="Image">
                                <figcaption>
                                    <h4>{{ $serv->imgtitle }}</h4>
                                </figcaption>
                            </figure>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="owl-thumbs" data-slider-id="services">
                        @foreach ($himaraservices as $serv)
                            <div class="owl-thumb-item">
                                <span class="media-left">
                                    <i class="{{ $serv->roomservice->service }}"></i>
                                </span>
                                <div class="media-body">
                                    <h5>{{ $serv->imgtitle }}</h5>
                                    <p>{{ $serv->titlepara }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- ========== GALLERY ========== -->
    @if ($gallery != null)
    <section class="gallery">
        <div class="container">
            <div class="section-title">
                {{-- {{dd($himaragallery)}} --}}
                @foreach ($himaragallery as $title )
                <h4>{!! $title->title !!} <span class="text-himara">{{ $title->coloredpart }}</span>
                </h4>
                <p class="section-subtitle">{{$title->subpara}}</p>
                <a href="{{ url('gallery') }}" class="view-all">{{ $title->direct }}</a>
                @endforeach
            </div>
            <div class="gallery-owl owl-carousel image-gallery">
                <!-- ITEM -->
                @foreach ($gallery as $gal)
                    {{-- {{dd($gal->category->catname)}} --}}
                    <div class="gallery-item">
                        <figure class="gradient-overlay image-icon">
                            <a href="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}">
                                <img src="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}" alt="Image">
                            </a>
                            <figcaption> {{ $gal->category->catname }}</figcaption>
                        </figure>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif
    <!-- ========== TESTIMONIALS ========== -->
    @if ($roomreviews != null)
    <section class="testimonials gray">
        <div class="container">
            <div class="section-title">
                <h4>OUR GUESTS LOVE US</h4>
                <p class="section-subtitle">What our guests are saying about us</p>
            </div>
            <div class="owl-carousel testimonials-owl">
                <!-- ITEM -->
                @foreach ($roomreviews as $review)
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="author-img">
                                <img alt="Image" class="img-fluid"
                                    src="{{ asset('storage/user_images/thumbnail/' . $review->users->img) }}">
                            </div>
                            <div class="author">
                                <h4 class="name">{{ $review->users->name }} {{ $review->users->lastname }}</h4>
                                <div class="location">{{ $review->users->city }}/ {{ $review->users->country }}</div>
                            </div>
                            <div class="rating">
                                @switch($review->star)
                                    @case(1)
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                    @break

                                    @case(2)
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                    @break

                                    @case(3)
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                    @break

                                    @case(4)
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                    @break

                                    @case(5)
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                        <i class="fa fa-star voted" aria-hidden="true"></i>
                                    @break

                                    @default
                                @endswitch
                                {{-- <i class="fa fa-star voted voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted voted" aria-hidden="true"></i> --}}
                            </div>
                            <p>{{ $review->feedback }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <!-- ========== RESTAURANT ========== -->

    @if ($himararestaurants != null)
    <section class="restaurant image-bg parallax gradient-overlay op5"
        data-src="{{ 'storage/homepagephotovideo/thumbnail/' . $homepagephotovideos[0]->img }}" data-parallax="scroll"
        data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="container">
            <div class="section-title">
                @foreach ($himararestauranttitle as $resitems)
                <h4>{{$resitems->title}} {{$resitems->subtitle}}</h4>
                <p class="section-subtitle">{{$resitems->subpara}}</p>
                @endforeach
                {{-- <h4>{{ $himararestaurants[0]->title }} {{ $himararestaurants[0]->subtitle }}</h4>
                <p class="section-subtitle">{{ $himararestaurants[0]->subpara }}</p> --}}
            </div>
            <div class="row">
                <!-- ITEM -->
                {{-- {{dd($himararestaurants)}} --}}
                @foreach ($himararestaurants as $resitem)
                    <div class="col-md-6 col-sm-6 col-6  p-4">
                        <div class="restaurant-menu-item">
                            <div class="row ">
                                <div class="col-lg-4 col-12 mt-3 ">
                                    <figure>
                                        <img src="{{ asset('storage/himararestaurent_images/thumbnail/' . $resitem->img) }}"
                                            class="img-fluid " alt="Image">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <div class="info">
                                        <div class="title">
                                            <span class="name">{{ $resitem->imgtitle }}</span>
                                            <span class="price">
                                                <span class="amount">€{{ $resitem->price }}</span>
                                            </span>
                                        </div>
                                        <p>{{ $resitem->imgpara }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Paginattion --}}
            <div class="d-flex justify-center">
                <div class="w-50 m-auto">
                    {{ $himararestaurants->links() }}
                </div>
            </div>
    </section>
    @endif
    <!-- ========== NEWS ==========-->
    @if ($latestnews != null)
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h4 class="title">LATEST NEWS</h4>
                <p class="section-subtitle">Check out our latest news</p>
            </div>
            <div class="row">
                @foreach ($latestnews as $news)
                    <!-- ITEM -->
                    <div class="col-md-4">
                        <div class="news-grid-item">
                            <figure class="gradient-overlay-hover link-icon">

                                <a href="{{$news->id}}/showLnews">
                                    <img src="{{ asset('storage/latestnews_images/thumbnail/' . $news->img) }}"
                                        class="img-fluid" alt="Image">
                                </a>
                            </figure>
                            <div class="news-info">
                                <h4 class="title">
                                    <a href="blog-post.html">{{ $news->title }}</a>
                                </h4>
                                <p>{{ $news->para }}</p>
                                <div class="post-meta">
                                    {{-- {{dd($news->user->name)}} --}}
                                    <span class="author">
                                        <a href="#"><img
                                                src="{{ asset('storage/user_images/thumbnail/' . $news->user->img) }}"
                                                width="16" alt="Image">
                                            {{-- {{dd($news->user->img)}} --}}
                                            {{ $news->user->name }}</a>
                                    </span>
                                    <span class="date">
                                        <i class="fa fa-clock-o"></i>
                                        {{ $news->user->created_at }}</span>
                                    <span class="comments">
                                        <a href="#">
                                            <i class="fa fa-commenting-o"></i>
                                            1 Comment</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Paginattion --}}
            <div class="d-flex justify-center">
                <div class="w-50 m-auto">
                    {{ $latestnews->links() }}
                </div>
            </div>
    </section>
    @endif
    <!-- ========== VIDEO ========== -->
    {{-- {{dd($homepagephotovideos)}} --}}
    @if ($homepagephotovideos != null)
    @foreach ($homepagephotovideos as $item )
    <section class="video np parallax gradient-overlay op6"
        data-src="{{ asset('storage/homepagephotovideo/thumbnail/' . $item->img) }}"
        data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="inner gradient-overlay">
            <div class="container">
                <div class="video-popup">
                    <a class="popup-vimeo" href="{{ $item->videolink }}">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    @endif

    <!-- ========== CONTACT V2 ========== -->

    <section class="contact-v2 gray">
        <div class="container">
            <div class="row">
                @if ($contactinfo != null)
                @foreach ($contactinfo as $info )
                <div class="col-md-5">
                    <div class="section-title">
                        <h4>GET IN TOUCH</h4>
                        <p class="section-subtitle">Get in touch</p>
                    </div>
                    <ul class="contact-details">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>{{$info->adress}}
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            Phone:{{$info->phone}}
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>
                            Fax:{{$info->gsm}}
                        </li>
                        <li>
                            <i class="fa fa-globe"></i>
                            Web:{{$info->website}}
                        </li>
                        <li>

                            <i class="fa fa-envelope"></i>
                            Email:
                            <a href="mailto:info@site.com">{{$info->email}}</a>
                        </li>
                    </ul>
                </div>
                @endforeach
                @endif
                <div class="col-md-7">
                    <div class="section-title">
                        <h4>CONTACT US</h4>
                        <p class="section-subtitle">Say hello</p>
                    </div>
                    <form action="/storecontact" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Your Name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn" type="submit">
                            <i class="fa fa-location-arrow"></i>Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
