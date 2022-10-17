@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add a slider </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add slider FORM -->
    <form action="/storeslider" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf

        <div class="form-group">
            <input class="form-control" name="title1" value="Where your Dreams True" type="text" >
        </div>

        <div class="form-group">
            <input class="form-control" name="title2" value="You'll never forget your stay" type="text" >
        </div>

        <div class="form-group">
            <input class="form-control" name="title3" value="Live You Myth In Himara Hotl" type="text" >
        </div>

        <div class="form-group">
            <input class="form-control" name="title4" value="Star Luxury Hotel" type="text" >
        </div>

        <div class="form-group " >
            <input  class="form-control" name="img"  type="file">
        </div>

          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection
