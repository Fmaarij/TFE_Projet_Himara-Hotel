@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Update the himara gallery head </h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif

        <!-- add an himara gallery  FORM -->
        <form action="/{{ $himaragallery->id }}/updateHgal" method="post" enctype="multipart/form-data"
            class="contact-form">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <input class="form-control" name="title" value="{{ $himaragallery->title }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="coloredpart" value="{{ $himaragallery->coloredpart }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="subpara" value="{{ $himaragallery->subpara }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="direct" value="{{ $himaragallery->direct }}" type="text">
            </div>

            <div class="form-group">
                <button class="btn mt30">Update</button>
            </div>
        </form>
    </div>
@endsection
