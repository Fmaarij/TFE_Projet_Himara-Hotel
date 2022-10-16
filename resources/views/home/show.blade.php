@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                {{-- <div class="card-header">Dish title : {{ $himararestaurants->title }}</div> --}}
                <div class="card-body">
                    <div class="card m-auto" style="width: 35rem;">
                        <div class="card-body">
                            <p class="card-title">Title : {{ $homes->title }}</p>
                            <p class="card-title">Subtitle : {{ $homes->subtitle }}</p>
                        </div>
                        <div class="card-body">
                                    <a href="/{{$homes->id}}/editHtitles">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $homes->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
