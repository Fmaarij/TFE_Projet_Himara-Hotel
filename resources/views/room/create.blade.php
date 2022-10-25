@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add A Room </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add a room FORM -->
    <form action="/storeroom" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        {{-- @foreach ($rooms as $room ) --}}


        {{-- <input type="hidden" name="id" value="{{$room->id}}"> --}}
        <div class="form-group">
            {{-- <label for="">Image</label> --}}
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
            <input class="form-control" name="bed" placeholder="Number of beds" type="number">
        </div>
        <div class="form-group " >
            <input type="hidden" class="form-control" name="availablerooms" placeholder="Number of guests foor this room type" type="number" value="8">
        </div>
        <div class="form-group">
            <input class="form-control" name="maxguests" placeholder="Number of guests foor this room type" type="number">
        </div>
        <div class="form-group">
            <input class="form-control" name="city" placeholder="Paris" type="text">
        </div>

        {{-- review part --}}
        <div class="form-group">
            <input class="form-control" name="star"  placeholder="stars" type="number">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Best view ever...." ></textarea>
        </div>
        {{-- End of review part --}}
        <div class="form-group">
            <textarea class="form-control" name="description1" placeholder="Best view ever...." ></textarea>
        </div>
        <div class="form-group">
            <input class="form-control" name="price" placeholder="$87" type="text">
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

        {{-- @endforeach --}}
        <div class="form-group">
            <div class="form-control " >
                @foreach ($roomservices as $service )
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



