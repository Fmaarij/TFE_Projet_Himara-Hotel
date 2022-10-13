@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">About title : {{ $abouts->title }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 35rem;">
                        {{-- @if ($teams->img != null){ --}}
                            <img class="card-img-top" src="{{asset('storage/about_images/thumbnail/'.$abouts->img)}}" alt="gallerimg">
                        {{-- }@else --}}
                        {{-- <img class="card-img-top" src="storage/team_images/{{$teams->img}}" alt="memebrs picture"> --}}
                        {{-- @endif --}}
                        <div class="card-body">
                            <p class="card-title">Subpara : {{ $abouts->subpara }}</p>
                            <p class="card-text">Para : {{ $abouts->para}}</p>
                            <p class="card-text">Providers :
                                @php $providers = $abouts->provider ? json_decode($abouts->provider, true) : []; @endphp
                                @if ($providers != null)
                                    @foreach ($providers as $provid)
                                    {{-- {{dd($provid)}} --}}
                                        <img  alt="pic" src="{{asset('storage/about_images/thumbnail/'.$provid)}}">
                                        @endforeach
                                        @else
                                        <p>column provider needs to edited</p>
                                @endif
                            </p>
                            <p class="card-title">ImgTitle: {{ $abouts->imgtitle}}</p>
                            <p class="card-text">ImgTitle : {{ $abouts->imgpara}}</p>
                        </div>
                        <div class="card-body">
                                    <a href="/{{$abouts->id}}/editabout">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $abouts->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
