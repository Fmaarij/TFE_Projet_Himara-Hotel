@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Edit a team member </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add a room FORM -->
    <form action="/{{$teams->id}}/updatemember" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        @method('PUT')
        <div class="form-group " >
            <input class="form-control" name="name" value="{{$teams->name}}" type="text">
        </div>
        <div class="form-group">
            <input class="form-control" name="lastname" value="{{$teams->lastname}}"  type="text">
        </div>

        <div class="form-group">
            <input class="form-control" name="post" value="{{$teams->post}}"  type="text">
        </div>

        <div class="form-group">
            <textarea class="form-control"  type="text" name="details"  cols="4" rows="4">{{$teams->details}}</textarea>
        </div>
        <div class="form-group">
            {{-- <label for="">Image</label> --}}
            <div class="w-25">
                <img class="w-100 rounded-circle"  src="{{asset('storage/team_images/thumbnail/'.$teams->img)}}" class="img-fluid" alt="Image">
            </div>
            <input class="form-control mt-3" name="img"  type="file" id="image">
        </div>
          <div class="form-group">
            <button class="btn mt20">Update</button>
        </div>
    </form>
</div>
@endsection



