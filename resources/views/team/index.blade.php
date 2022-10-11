@extends('layouts.app')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6"
        style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>OUR STAFF</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Our Staff</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="location-page">
        <div class="container">
            <div class="row">
                <!-- ITEM -->
                @foreach ($teams as $team )
        {{-- @if($team->post == 'Housekeeper') --}}
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            {{-- <img src="{{asset('storage/team_images/'.$team->img)}}" class="img-fluid" alt="Image"> --}}
                             <img src="{{asset('storage/team_images/thumbnail/'.$team->img)}}" class="img-fluid" alt="Image">
                            <div class="position">{{$team->post}}</div>
                        </figure>
                        <div class="details">
                            <h5>{{$team->name}} {{$team->lastname}}</h5>
                            <p>{{$team->details}}</p>
                        </div>
                    </div>
                </div>
                {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </main>
@endsection
