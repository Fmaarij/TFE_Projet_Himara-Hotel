@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Update the slider  </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- Update  FORM -->
    <form action="/{{$sliders->id}}/updateslider" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <input class="form-control" name="title1" value="{{$sliders->title1}}" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" name="title2" value="{{$sliders->title2}}" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" name="title3" value="{{$sliders->title3}}" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" name="title4" value="{{$sliders->title4}}" type="text" >
        </div>
        <div class="w-25">
            <img class="w-100 rounded-circle"  src="{{asset('storage/slider_images/thumbnail/'.$sliders->img)}}" class="img-fluid" alt="Image">
            <input class="form-control mt-3" name="img"  type="file" id="image">
        </div>
          <div class="form-group">
            <button class="btn mt30">Update</button>
        </div>
    </form>
</div>
@endsection
