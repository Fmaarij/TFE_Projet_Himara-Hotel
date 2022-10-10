@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Name : {{ $teams->name }} {{ $teams->lastname }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                        {{-- @if ($teams->img != null){ --}}
                            <img class="card-img-top" src="{{asset('storage/team_images/thumbnail/'.$teams->img)}}" alt="memebrs">
                        {{-- }@else --}}
                        {{-- <img class="card-img-top" src="storage/team_images/{{$teams->img}}" alt="memebrs picture"> --}}
                        {{-- @endif --}}
                        {{-- <img src="asset('storage/team_images/'.{{ $team->img }})" alt=""> --}}
                        <div class="card-body">
                            <p class="card-title">{{ $teams->post }}</p>
                            <p class="card-text">{{ $teams->details }}</p>
                        </div>
                        <div class="card-body">
                                    <a href="/{{$teams->id}}/editmember">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $teams->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
