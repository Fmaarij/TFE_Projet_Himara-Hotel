@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Phot name : {{ $gallery->galname }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                        {{-- @if ($teams->img != null){ --}}
                            <img class="card-img-top" src="{{asset('storage/gallery_images/thumbnail/'.$gallery->img)}}" alt="gallerimg">
                        {{-- }@else --}}
                        {{-- <img class="card-img-top" src="storage/team_images/{{$teams->img}}" alt="memebrs picture"> --}}
                        {{-- @endif --}}
                        <div class="card-body">
                            <p class="card-title">Category : {{ $gallery->category->catname  }}</p>
                            {{-- <p class="card-text">{{ $teams->details }}</p> --}}
                        </div>
                        <div class="card-body">
                                    <a href="/{{$gallery->id}}/editimg">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $gallery->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
