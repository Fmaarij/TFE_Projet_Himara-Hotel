@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Give your review </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add a room FORM -->
    @foreach ($room as $rom )

    {{-- {{dd($rom->id)}} --}}
    @endforeach
    <form action="/{{$rom->id}}/updatestars" method="post" enctype="multipart/form-data"
        class="contact-form" >
        {{-- <form action="/{{$room->id}}/updateroomz" method="post" enctype="multipart/form-data"
            class="contact-form" > --}}
        @csrf
        @method('PUT')
        <div class="form-group">

            <select name="star" name="star" id="">
                <option value="1">1 star</option>
                <option value="2">2 star</option>
                <option value="3">3 star</option>
                <option value="4">4 star</option>
                <option value="5">5 star</option>
            </select>
        </div>

        <div class="form-group">
            <textarea class="form-control" name="description" name="feedback" >Your review goes here...</textarea>
        </div>

        <div class="form-group">
            <button type ="submit" class="btn mt30">Send</button>
        </div>
    </form>
</div>
@endsection
