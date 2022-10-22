@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Edit a category </h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif
        <!-- add a category FORM -->
        <form action="/{{$tags->id}}/updatetag" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input class="form-control" name="catname" value="{{$tags->catname}}" type="text">
            </div>

            <div class="form-group">
                <button class="btn mt30">Update</button>
            </div>
        </form>
    </div>
@endsection
