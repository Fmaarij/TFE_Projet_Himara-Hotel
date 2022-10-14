@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Update the photo or the video </h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif

        <!-- add an himara gallery  FORM -->
        <form action="/{{ $homepagephotovideos->id }}/updatePV" method="post" enctype="multipart/form-data"
            class="contact-form">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <input class="form-control" name="imgname" value="{{ $homepagephotovideos->imgname }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="videoname" value="{{ $homepagephotovideos->videoname }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="videolink" value="{{ $homepagephotovideos->videolink }}" type="text">
            </div>
            <div class="form-group ">
                <p width="10%">
                    <img width="100%" src="{{asset('storage/homepagephotovideo/thumbnail/'.$homepagephotovideos->img) }}" alt="images">
                </p>
                <input class="form-control" name="img" type="file">
            </div>

            <div class="form-group">
                <button class="btn mt30">Update</button>
            </div>
        </form>
    </div>
@endsection
