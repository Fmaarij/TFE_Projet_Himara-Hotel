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
    <!-- add an image FORM -->
    <form action="/{{$gallery->id}}/updateimg" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        @method('PUT')
        {{-- <div class="form-group " >
            <input  class="form-control" name="img"  type="file">
        </div> --}}

        <div class="form-group">
            <input class="form-control" name="galname" placeholder="Ocean,Appel,Dance,etc..." value="{{$gallery->galname}}" type="text" >
        </div>
        <div class="form-group">
            <select name="category_id" >
            @foreach ($category as $cat )
            <option value="{{$cat->id}}">{{$cat->catname}}</option>
            @endforeach
        </select>
        </div>
        <div class="w-25">
            <img class="w-100 rounded-circle"  src="{{asset('storage/gallery_images/thumbnail/'.$gallery->img)}}" class="img-fluid" alt="Image">
            <input class="form-control mt-3" name="img"  type="file" id="image">
        </div>
          <div class="form-group">
            <button class="btn mt30">Update</button>
        </div>
    </form>
</div>
@endsection
