@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Dish title : {{ $himararestaurants->title }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 35rem;">
                            <img class="card-img-top" src="{{asset('storage/himararestaurent_images/thumbnail/'.$himararestaurants->img)}}" alt="gallerimg">

                        <div class="card-body">
                            <p class="card-title">Subtitle : {{ $himararestaurants->subtitle }}</p>
                            <p class="card-text">Para : {{ $himararestaurants->subpara}}</p>
                            <p class="card-title">ImgTitle: {{ $himararestaurants->imgtitle}}</p>
                            <p class="card-text">Price : {{ $himararestaurants->price}}</p>
                        </div>
                        <div class="card-body">
                                    <a href="/{{$himararestaurants->id}}/editHres">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $himararestaurants->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
