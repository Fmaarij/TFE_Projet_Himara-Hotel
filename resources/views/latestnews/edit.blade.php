@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add an image </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- update news  FORM -->
    <form action="/{{$latestnews->id}}/updateLnews" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <input class="form-control" name="title" value="{{$latestnews->title}}" value="{{$latestnews->galname}}" type="text" >
        </div>
        <div class="form-group">
            <textarea class="form-control" name="para"  type="text" > {{$latestnews->para}}</textarea>
        </div>
        <div class="w-25">
            <img class="w-100 rounded-circle"  src="{{asset('storage/latestnews_images/thumbnail/'.$latestnews->img)}}" class="img-fluid" alt="Image">
            <input class="form-control mt-3" name="img"  type="file" id="image">
        </div>
          <div class="form-group">
            <button class="btn mt30">Update</button>
        </div>
    </form>
</div>
@endsection
