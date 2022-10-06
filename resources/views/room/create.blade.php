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
            <input class="form-control" name="city" placeholder="Paris" type="text">
        </div>
        <div class="form-group">
            <input class="form-control" name="star"  placeholder="stars" type="number">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Best view ever...." ></textarea>
        </div>
        <div class="form-group">
            <input class="form-control" name="price" placeholder="$87" type="text">
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



