@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Add the bout info</h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif
        <!-- add a aboutinfo FORM -->
        <form action="/{{ $abouts->id }}/updateabout" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <input class="form-control" name="title" value="{{ $abouts->title }}" type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="year" value="{{ $abouts->year }}" type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="subpara" value="{{$abouts->subpara}} "
                    type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="para" value="{{ $abouts->para }}" type="text">
            </div>
            <div class="form-group">Providers added already:
                @php $providers = $abouts->provider ? json_decode($abouts->provider, true) : []; @endphp
                @if ($providers != null)
                    @foreach ($providers as $provid)
                    {{-- {{dd($provid)}} --}}
                        <img  alt="pic" src="{{asset('storage/about_images/thumbnail/'.$provid)}}">
                        @endforeach
                        @else
                       <p>Chose the providers here</p>
                @endif
            </div>

            <div class="form-group">
                <div class="form-control ">
                    @foreach ($providerz as $prov)
                        <label for="provider"> <input type="checkbox" name="provider[]"
                                value="{{ $prov->img }}">{{ $prov->provider_name }}:<img
                                href="{{ $prov->provider }}"></label>
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" name="imgtitle" value="{{ $abouts->imgtitle }}" type="text">
            </div>
            <div class="form-group">
                {{-- <label for="">Image</label> --}}
                <input class="form-control" name="imgpara" value="{{ $abouts->imgpara }}" type="text">
            </div>
            <div class="form-group">
                <div class="w-25">
                    <img class="w-100 rounded" src="{{ asset('storage/about_images/thumbnail/' . $abouts->img) }}"
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
