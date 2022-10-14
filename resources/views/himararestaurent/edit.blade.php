@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Update the dishes</h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif
        <!-- add a aboutinfo FORM -->
        <form action="/{{ $himararestaurants->id }}/updateHres" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <input class="form-control" name="title" value="{{ $himararestaurants->title }}" type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="subtitle" value="{{ $himararestaurants->subtitle }}" type="text">
            </div>
            <td width="10%" class="rounded">
            <div class="form-group ">
                <input class="form-control" name="subpara"  value="{{ $himararestaurants->subpara }}"
                    type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="imgpara" value="{{ $himararestaurants->imgpara }}" type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="imgtitle" value="{{ $himararestaurants->imgtitle }}" type="text">
            </div>
            <div class="form-group">
                {{-- <label for="">Image</label> --}}
                <input class="form-control" name="price" value="{{ $himararestaurants->price }}" type="number">
            </div>
            <div class="form-group">
                <div class="w-25">

                    {{-- src="{{ asset('storage/himararestaurent_images/thumbnail/' .$res->img) }}"  --}}
                    <img class="w-100 rounded-circle" src="{{ asset('storage/himararestaurent_images/thumbnail/' .$himararestaurants->img)  }}"
                        class="img-fluid" alt="Image">
                </div>
                <input class="form-control" name="img" type="file">
            </div>
            <div class="form-group">
                <button class="btn mt30">Update</button>
            </div>
        </form>
    </div>
@endsection
