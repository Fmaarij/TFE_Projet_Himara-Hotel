@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Typ of room : {{ $room->typeofroom->type_name }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                            <img class="card-img-top" src="{{asset('storage/room_images/thumbnail/'.$room->img)}}" alt="memebrs">
                        <div class="card-body">
                            <p class="card-title">City : {{ $room->city }}</p>
                            <p class="card-text">Price : {{ $room->price }}€</p>
                            <p class="card-text">Reduction : {{ $room->promo }}%</p>
                            <p class="card-text">Validation :
                                @if($room->Ptoshow ==1)
                                Yes
                                @else
                                No
                                @endif
                            </p>
                            <p style="
                            overflow: scroll;
                            display: -webkit-box;
                            -webkit-line-clamp: 4; /* number of lines to show */
                                    line-clamp: 2;
                            -webkit-box-orient: vertical; text-aligne:left;" class="card-text ">Description : {{ $room->description1 }}</p>
                        </div>
                        <div class="card-body">
                                    <a href="/{{$room->id}}/editroomz">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $room->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
