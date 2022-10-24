@extends('layouts.app')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6"
        style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
     background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>ROOMS BY Tags</h1>
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
                    @forelse ($room_tag as $room)
                        @if ($room->Ptoshow == 1)
                            <div class="room-list-item">
                                <div class="row">
                                    {{-- && $room->id == $room->typeofroom->room_id --}}

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
                                                @switch($room->star)
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
                                                {{-- @endif --}}
                                                {{-- @endforeach --}}

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
                                            @if ($room->promo == 0)
                                                <span class="price">€{{ $room->price }} / night</span>
                                            @else
                                                <s class="price">€ {{ $room->price }}</s>
                                                <span
                                                    class="price">€{{ $room->price - ($room->price * $room->promo) / 100 }}
                                                    / night</span>
                                            @endif
                                            <a href="/{{ $room->id }}/showroom" class="btn btn-sm">view <br>
                                                details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @empty
                            <p>No room found as <strong> {{ request()->query('search') }}</strong>.</p>
                        @endforelse
                        {{-- Paginattion --}}
                        <div class="d-flex justify-center">
                            <div class="m-auto">
                                {{ $room_tag->appends(['roomcategory' => request()->query('roomcategory')])->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    @endsection

    {{-- rooms --}}
