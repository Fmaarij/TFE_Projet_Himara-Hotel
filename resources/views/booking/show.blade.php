@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Name: {{ $booking->booking_name }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                        <div class="card-body">
                            <p class="card-text">User ID : {{ $booking->user_id }}</p>
                            <p class="card-text">Phone : {{ $booking->booking_phone }}</p>
                            <p class="card-text">City :{{ $booking->booking_country }}</p>
                            <p class="card-text">Date :{{ $booking->booking_date }}</p>
                            <p class="card-text">Adults :{{ $booking->booking_adult }}</p>
                            <p class="card-text">Childeren : {{ $booking->booking_child }}</p>
                            <p class="card-text">Room ID : {{ $booking->room_id}}</p>
                            <p class="card-text">Comments : {{ $booking->booking_comments}}</p>
                        </div>

                        <div class="card-body">
                                    <a href="/{{$booking->id}}/editbookings">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Booked : {{ $booking->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
