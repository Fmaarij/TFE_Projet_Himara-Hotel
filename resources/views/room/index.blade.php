@extends('layouts.app')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6"
        style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
     background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>ROOMS</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('homepage') }}">Home</a>
                    </li>
                    <li>Rooms</li>

                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="rooms-list-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ITEM -->
                    @foreach ($rooms as $room)
                        <div class="room-list-item">
                            <div class="row">


                                <div class="col-lg-5">
                                    <figure class="gradient-overlay-hover link-icon">
                                        {{-- <a href="room.html"><img src="{{asset('storage/room/'.$room->img)}}" class="img-fluid" alt="Image"></a> --}}
                                        <a href="{{ asset('storage/room_images/thumbnail/' . $room->img) }}">
                                            <img src="{{ asset('storage/room_images/thumbnail/' . $room->img) }}"
                                                class="img-fluid" alt="Image">
                                            {{-- <img src="{{(!empty($room->img))? url( $room->img):url('roomthumbnail/no_image.jpg')}}"
                        class="img-fluid" alt="Image"> --}}
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-lg-5">
                                    <div class="room-info">
                                        <h3 class="room-title">

                                            <a href="room.html">{{ $room->city }} </a>
                                        </h3>
                                        <span class="room-rates">
                                            {{-- {{dd($room->typeofroom_id === $room->roomreview->typeofroom_id)}} --}}
                                            {{-- @if ($room->typeofroom_id == $room->roomreview->typeofroom_id) --}}


{{dd($roomsreviews)}}
                                            {{-- {{dd($item->star)}} --}}
                                            @foreach ($roomsreviews as $item)
                                                @switch($item->star)
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
                                            @endforeach

                                            <a href="room.html#room-reviews">{{ $room->star }} Based on 5 Ratings</a>
                                        </span>
                                        <p>{{ $room->description }}.</p>
                                        <div class="room-services">
                                            <td>
                                                @php $categories = $room->service ? json_decode($room->service, true) : []; @endphp

                                                @if ($categories != null)
                                                    @foreach ($categories as $category)
                                                        <i class="{{ $category }}",></i>
                                                        {{-- @else
                                                        <p>nothing</p> --}}
                                                    @endforeach
                                                @endif
                                            </td>
                                            <span>Bed : {{ $room->bed }}</span>
                                            <span>Max Guests : {{ $room->maxguests }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="room-price">
                                        <span class="price">€{{ $room->price }} / night</span>
                                        <a href="/{{ $room->id }}/showroom" class="btn btn-sm">view <br> details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- Paginattion --}}
                    <div class="d-flex justify-center">
                        <div class="w-50 m-auto">
                            {{ $rooms->links() }}
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <aside class="widget noborder">
                            <div class="search">
                                <form class="widget-search">
                                    <input type="search" placeholder="Search">
                                    <button class="btn-search" id="searchsubmit" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">CATEGORIES</h4>
                            <ul class="categories">
                                <li>
                                    <a href="{{ url('single') }}">Single Room<span class="posts-num">51</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('double') }}">Double Room<span class="posts-num">24</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('family') }}">Family Room
                                        <span class="posts-num">9</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('delux') }}">Deluxe Room<span class="posts-num">12</span></a>
                                </li>
                            </ul>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">
                                    <span class="tag">Red</span></a>
                                <a href="#">
                                    <span class="tag">Dark</span></a>
                                <a href="#">
                                    <span class="tag">Yellow</span></a>
                                <a href="#">
                                    <span class="tag">Blue</span></a>
                                <a href="#">
                                    <span class="tag">Pink</span></a>
                                <a href="#">
                                    <span class="tag">Green</span></a>
                                <a href="#">
                                    <span class="tag">Gray</span></a>
                                <a href="#">
                                    <span class="tag">Brown</span></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
