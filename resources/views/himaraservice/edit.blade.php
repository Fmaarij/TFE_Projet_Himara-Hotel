@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Update the service </h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif

        <!-- add an himara service  FORM -->
        <form action="/{{ $himaraservices->id }}/updateHservice" method="post" enctype="multipart/form-data"
            class="contact-form">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <input class="form-control" name="title" value="{{ $himaraservices->title }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="coloredpart" value="{{ $himaraservices->coloredpart }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="subpara" value="{{ $himaraservices->subpara }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="imgtitle" value="{{ $himaraservices->imgtitle }}" type="text">
            </div>
            <div>
                {{-- {{dd( $himaraservices->roomservice->service)}} --}}
                {{-- Not showing the icon --}}
                <i class="{{ $himaraservices->roomservice->service }}"></i>
            </div>
            <div class="form-group ">

                <select name="icon_id" id="">
                    @foreach ($roomservices as $roomserv)
                        <option value="{{ $roomserv->id }}">{{ $roomserv->service_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group ">
                <input class="form-control" name="titletitle" value="{{ $himaraservices->titletitle }}" type="text">
            </div>
            <div class="form-group ">
                <textarea class="form-control" name="titlepara" type="text">{{ $himaraservices->titlepara }}</textarea>
            </div>

            <div class="form-group ">
                <img class="w-25 rounded" src="{{ asset('storage/himara_images/thumbnail/' . $himaraservices->img) }}"
                    alt="gallerimg">
                <input class="form-control" name="img" type="file">
            </div>
            <div class="form-group">
                <button class="btn mt30">Update</button>
            </div>
        </form>
    </div>
@endsection
