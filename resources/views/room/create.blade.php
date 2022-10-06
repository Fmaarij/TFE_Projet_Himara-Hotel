@extends('layouts.app')
@section('content')

{{--
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($message = Session::get('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{ $message }}</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="row">
<div class="col-md-4">
    <strong>Original Image:</strong>
    <br/>
    <img src="/images/{{ Session::get('imageName') }}" width="300px" />
</div>
<div class="col-md-4">
    <strong>Thumbnail Image:</strong>
    <br/>
    <img src="/thumbnail/{{ Session::get('imageName') }}" />
</div>
</div>
@endif --}}



<div class="col-md-8">
    <div class="section-title">
        <h4>Add A Room</h4>
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
                <input type="checkbox" id="subscribeNews" name="service_id" value="{{$service->id}}">
                <label for="service_id">{{$service->service}}</label>

                @endforeach
            </div>
        </div>
        <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection
