@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Add a category </h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif
        <!-- add a category FORM -->
        <form action="/storetag" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf

            <div class="form-group">
                <input class="form-control" name="tagname" placeholder="Diving,Sport,Lake,Beach..." type="text">
            </div>

            <div class="form-group">
                <button class="btn mt30">Add</button>
            </div>
        </form>
    </div>
@endsection
