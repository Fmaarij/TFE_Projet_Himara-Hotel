@extends('layouts.app')
@section('content' )
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op5"
        style="background: url(/images/breadcrumb.jpg); background-repeat: no-repeat;
   background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>{{ $room->city }}</h1>
                <div class="room-details-price">
                    €{{ $room->price }} / NIGHT
                </div>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('homepage') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('rooms') }}">Rooms</a>
                    </li>
                    <li>{{ $room->city }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ROOM SLIDER -->
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            <!-- ITEM -->
                            @foreach ($roomsphotos as $pics)
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="{{ asset('storage/roomsphoto_images/thumbnail/' . $pics->img) }}">
                                            <img class="img-fluid"
                                                src="{{ asset('storage/roomsphoto_images/thumbnail/' . $pics->img) }}"
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                        <div id="room-thumbs" class="room-thumbs owl-carousel">
                            @foreach ($roomsphotos as $pics)
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src="{{ asset('storage/roomsphoto_images/thumbnail/' . $pics->img) }}"
                                        alt="Image">
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <p class="dropcap"> {{ $room->description1 }}

                    </p>
                    <p>
                        {{ $room->description1  }}
                    </p>
                    <div class="section-title sm">
                        <h4>ROOM SERVICES</h4>
                        <p class="section-subtitle">Istanbul Includes</p>
                    </div>
                    <div class="room-services-list">
                        <div class="row">
                            {{-- {{dd($roomservices)}} --}}
                            @foreach ($roomservices as $service)
                                <div class="col-sm-4">
                                    <ul class="list-unstyled">
                                        {{-- {{ dd($service->service_name) }} --}}
                                        {{-- {{dd($room->service)}} --}}
                                        {{-- {{dd(Str::contains($room->service, $service->service),$room->service,$service->service)}} --}}
                                        @if ($room->service != null)
                                            {{-- à revoir cet partie  --}}
                                            @if (Str::contains($room->service, $service->service))
                                            {{-- @if ($service->service == $room->service>) --}}
                                                <li>
                                                    <i class="text-success fa fa-check"></i>

                                                    {{-- <p class="bg-success">thick</p> --}}
                                                    {{ $service->service_name }}
                                                </li>
                                            @else
                                                <li>
                                                    {{-- <p class="bg-danger">croix</p> --}}
                                                    <i class="text-danger fa fa-times"></i>
                                                    {{ $service->service_name }}
                                                </li>
                                            @endif
                                        @else
                                            <p>room service est null</p>
                                        @endif
                                        {{-- <li>
                                                <i class="fa fa-check"></i> {{$service->service_name}}
                                            </li> --}}

                                        {{-- @endforeach --}}
                                        {{-- <li>
                                            <i class="fa fa-check"></i> {{$service->service_name}}
                                        </li> --}}

                                        {{-- @php $categories = $room->service ? json_decode($room->service, true) : []; @endphp --}}
                                        {{-- {{ dd($categories) }} --}}
                                        {{-- @if ($categories != null)
                                            @foreach ($categories as $category)
                                                <li class="fa fa-check">
                                                    <i class="{{ $category }}",></i>
                                                </li> --}}
                                        {{-- @else --}}
                                        {{-- <p>no service included</p> --}}
                                        {{-- @endforeach
                                        @endif --}}
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <p>{{ $abouts[0]->para }}

                    </p>
                    <p>{{ $abouts[0]->para }}

                    </p>
                    <!-- ROOM REVIEWS -->
                    <div id="room-reviews" class="room-reviews">
                        <div class="section-title sm">
                            <h4>ROOM REVIEWS</h4>
                            <p class="section-subtitle">What our guests are saying about us</p>
                        </div>
                        <div class="rating-details">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="review-summary">

                                        {{-- {{dd($review->star)}} --}}

                                        {{-- {{dd($roomserviews)}} --}}

                                        <div class="average"> {{$avgstar}}</div>
                                        {{-- @foreach ( $roomserviews as $review ) --}}
                                        <div class="rating">
{{-- $revoir********************************************************************************* --}}

                                            {{-- @switch($review->star)
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
                                        @endswitch --}}
                                            {{-- <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> --}}
                                        </div>
                                        {{-- @endforeach --}}

                                        <small>Based on 5 ratings</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">

                                            @foreach ( $roomsreviews as $review )
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">{{$review->star}} star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                @switch($review->star)
                                                @case(1)
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @break

                                                @case(2)
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @break

                                                @case(3)
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @break

                                                @case(4)
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @break

                                                @case(5)
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 100%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @break

                                                @default
                                            @endswitch
                                                {{-- <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 91%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> --}}
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                @switch($review->star)
                                                @case(1)
                                                <div class="progress-value">20%</div>
                                                @break

                                                @case(2)
                                                <div class="progress-value">40%</div>
                                                @break

                                                @case(3)
                                                <div class="progress-value">60%</div>
                                                @break

                                                @case(4)
                                                <div class="progress-value">80%</div>
                                                @break

                                                @case(5)
                                                <div class="progress-value">100%</div>
                                                @break

                                                @default
                                            @endswitch
                                                {{-- <div class="progress-value">91%</div> --}}
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    {{-- <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">4 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- ITEM -->
                                    {{-- <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">3 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-2 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 8%"
                                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">8%</div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- ITEM -->
                                    {{-- <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">2 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- ITEM -->
                                    {{-- <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">1 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>




                        {{-- @foreach ($roomsreviews as $reviews) --}}
                        {{-- {{dd($reviews->users)}} --}}
                        @foreach ($roomsreviews as $all )
                        {{-- {{dd($all)}} --}}
                        <div class="review-box">
                            <figure class="review-author">
                                <img src="{{asset('storage/user_images/thumbnail/'.$all->users->img)}}" alt="Image">
                            </figure>
                            <div class="review-contentt" >
                                <div class="rating">
                                    @switch($all->star)
                                                    @case(1)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @break

                                                    @case(2)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @break

                                                    @case(3)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @break

                                                    @case(4)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @break

                                                    @case(5)
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    @break

                                                    @default
                                                @endswitch
                                    {{-- <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i> --}}
                                </div>
                                <div class="review-info">
                                   {{$all->name}} {{$all->lastname}}  {{$all->created_at}}
                                </div>
                                <div class="review-text">
                                    <p>
                                        {{$all->feedback}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- @endforeach --}}
                        <!-- End review-box -->
                        {{-- <div class="review-box clearfix">
                            <figure class="review-author">
                                <img src="images/users/user2.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Brad Knight – January 17, 2018
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius
                                        impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur
                                        recusandae nostrum quod aperiam.
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End review-box -->
                        {{-- <div class="review-box clearfix">
                            <figure class="review-author">
                                <img src="images/users/user3.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Daryl Phillips – August 16, 2017
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro.
                                        Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab
                                        dignissimos! Alias.
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="similar-rooms">
                        <div class="section-title sm">
                            <h4>SIMILAR ROOMS</h4>
                            <p class="section-subtitle">Leave your review</p>
                        </div>
                        <div class="row">
                            {{-- {{dd($similarrooms)}} --}}
                            @foreach ($similarrooms as $sim )
                                {{-- {{dd($sim->rooms->img)}} --}}

                            <!-- ITEM -->
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="/{{$sim->id}}/showroom">
                                            <img src="{{asset('storage/room_images/thumbnail/'.$sim->img)}}" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            @php $categories = $sim->service ? json_decode($sim->service, true) : []; @endphp

                                                @if ($categories != null)
                                                    @foreach ($categories as $category)
                                                        <i aria-hidden="true" data-toggle="popover"
                                                        data-placement="right" data-trigger="hover" class="{{ $category }}",></i>
                                                        {{-- @else
                                                        <p>nothing</p> --}}
                                                    @endforeach
                                                @endif
                                            {{-- <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i> --}}
                                        </div>
                                        <div class="room-price">€{{$sim->price}} / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">{{$sim->city}}</a>
                                        </h2>
                                        <p>Enjoy our {{$sim->typeofroom->type_name}} room</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- ITEM -->
                            {{-- <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/double/double.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€129 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Paris</a>
                                        </h2>
                                        <p>Enjoy our double room</p>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- ITEM -->
                            {{-- <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/deluxe/deluxe.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-bath" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="2 Bathrooms"
                                                data-original-title="Bathroom"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€189 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Tokyo</a>
                                        </h2>
                                        <p>Enjoy our delux room</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <!-- WIDGET -->
                        <aside class="widget noborder">
                            <div class="vertical-booking-form">
                                <div id="booking-notification" class="notification"></div>
                                <h3 class="form-title">BOOK YOUR ROOM</h3>
                                <div class="inner">
                                    <form action="/storebooking"  method="post" enctype="multipart/form-data">
                                        @csrf
                                        <!-- EMAIL -->
                                        <div class="form-group">
                                            @auth
                                            <input class="form-control" name="booking_email" type="email"
                                            value="{{Auth::user()->email}}" readonly="readonly">
                                            @endauth
                                            @guest
                                            <input class="form-control" name="booking_email" type="email"
                                            placeholder="Your Email Address">
                                            @endguest
                                        </div>
                                        <!-- ROOM TYPE -->
                                        <div class="form-group">
                                            <select name="room_id" class="form-control" title="Select A Room "
                                        >
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
                                        <!-- DATE -->
                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control"
                                                    name="booking_date" placeholder="Slect Arrival & Departure Date"
                                                    >
                                            </div>
                                        </div>
                                        <!-- GUESTS -->
                                        <div class="form-group">
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
                                                            <input type="text" name="booking_adult"
                                                                class="booking-guests" value="0">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="guests-buttons">
                                                        <label>Cildren
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="Under 18 years"
                                                                data-original-title="Children">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="booking_child"
                                                                class="booking-guests" value="0">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- BOOKING BUTTON -->
                                        @auth
                                        <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A ROOM</button>
                                        @endauth
                                        @guest
                                        <a href="{{ route('login') }}">
                                            <p class="btn btn">LOG IN</p></a>
                                            @endguest
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
