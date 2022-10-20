@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>upadate  A Room </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add a room FORM -->
    <form action="/{{$room->id}}/updateroomz" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        @method('PUT')
        {{-- @foreach ($room as $room ) --}}


        {{-- <input type="hidden" name="id" value="{{$room->id}}"> --}}
        <div class="form-group">
            {{-- <label for="">Image</label> --}}
            <img src="{{ asset('storage/room_images/thumbnail/' . $room->img) }}"
                                                class="img-fluid" alt="Image">
            <input class="form-control" name="img"  type="file" id="image">
        </div>
        <div class="form-group">
            <select name="typeofroom_id" type="number">
                @foreach ($roomtype as $type )
                <option value="{{$type->id}}">{{$type->type_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" name="bed" value="{{$room->bed}}" type="number">
        </div>
        <div class="form-group " >
            <input type="hidden" class="form-control" name="availablerooms" value="{{$room->availablerooms}}"  type="number" value="8">
        </div>
        <div class="form-group">
            <input class="form-control" name="maxguests" value="{{$room->maxguests}}" type="number">
        </div>
        <div class="form-group">
            <input class="form-control" name="city" value="{{$room->city}}" type="text">
        </div>
        <div class="form-group">
            <input class="form-control" name="star"  value="{{$room->star}}" type="number">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description" >{{$room->description}}</textarea>
        </div>
        <div class="form-group">
            <input class="form-control" name="price" value="{{$room->price}}" type="text">
        </div>
        <div class="form-group">
            <select class="form-control" type='number'  name="promo" id="">
                <option value="10">10%</option>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
            </select>
        </div>
        <div class="form-group">
            @if($room->Ptoshow == 1)
            <input class="form-control bg-success text-light" name="Ptoshow"  placeholder="The room is validated" type="text">
            @else
            <input class="form-control bg-danger text-light" name="Ptoshow" placeholder="The room is not validated"   type="text">
            @endif
        </div>


        {{-- @endforeach --}}
        <div class="form-group">
            <div class="form-control " >
                @foreach ($roomervices as $service )
                <label for="service">  <input type="checkbox" id="" name="service[]" value="{{$service->service}}">{{$service->service_name}}:<i class="{{$service->service}}"></i></label>
                @endforeach
            </div>
        </div>
        <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection
