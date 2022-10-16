@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Add Home page titles</h4>
            <p class="section-subtitle"></p>
        </div>
        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif
        <!-- add a home page titles FORM -->
        <form action="/storeHtitles" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf
            <div class="form-group ">
                <input class="form-control" name="title" value="Himara." type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="subtitle" value="Services" type="text">
            </div>
            <div class="form-group">
                <button class="btn mt30">Add</button>
            </div>
        </form>
    </div>
@endsection
