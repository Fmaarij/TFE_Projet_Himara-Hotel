@extends('layouts.app')
@section('content')
    <div class="p-5">
        <h2 class="text-center mb-3">Bookings {{ Auth::user()->name }}</h2>
        <table class="table table-hover border ">
            <thead>
                {{-- {{dd(Auth::teams())}} --}}
                <tr>
                    <th>User ID</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Adults</th>
                    <th>Childeren</th>
                    <th>Room ID</th>
                    <th>Comments</th>
                    <th>Show</th>
                    <th>Delete</th>
                    {{-- @can('accessadmin')
                    <th>Validate the room</th>
                    @endcan --}}

            </thead>
            <tbody>
                {{-- @can('access-btn-booking') --}}
                @foreach ($bookings as $booking)
                    @if ($booking->user_id == Auth::user()->id || Auth::user()->role_id == 1)
                        {{-- {{dd($booking->id)}} --}}
                        {{-- {{dd(Auth::user()->id)}} --}}



                        <tr>
                            <td>{{ $booking->user_id }}</td>
                            <td>{{ $booking->booking_phone }}</td>
                            <td>{{ $booking->booking_country }}</td>
                            <td>{{ $booking->booking_date }}</td>
                            <td>{{ $booking->booking_adult }}</td>
                            <td>{{ $booking->booking_child }}</td>
                            <td>{{ $booking->room_id }}</td>
                            <td>{{ $booking->booking_comments }}</td>
                            {{-- @can('access-btn-booking') --}}
                            {{-- @if ($booking->user_id = Auth::user()->id && $booking->room_id == Auth::user()->room_id) --}}
                            <td>
                                <a href="/{{ $booking->id }}/showbookings">
                                    <button class="btn bg-primary">Show</button>
                                </a>
                            </td>
                            <td>
                                <form action="/{{ $booking->id }}/deletebookings" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn bg-danger">delete</button>
                                </form>
                            </td>
                            {{-- @endif --}}
                            {{-- @endcan --}}
                            {{-- @can('accessadmin')

                        <td>
                            <form action="/{{$roomz->id}}/valideroomz" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @if ($roomz->Ptoshow == 0)
                                <button class="btn bg-success">Yes</button>
                                @endif
                            </form>
                        </td>
                        @endcan --}}

                        </tr>
                        @endif
                        @endforeach
                        {{-- @endcan --}}
            </tbody>
        </table>
    </div>
@endsection
