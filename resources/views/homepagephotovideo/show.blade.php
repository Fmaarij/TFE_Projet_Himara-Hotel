@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Image name : {{ $homepagephotovideos->imgname }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                        <div class="card-body">
                            <p class="card-text">Video name : {{ $homepagephotovideos->videoname }}</p>
                            <p class="card-text">Video link : {{ $homepagephotovideos->videolink }}</p>
                            <p class="card-text" width="10%">Image :
                            <img width="100%"src="{{asset('storage/homepagephotovideo/thumbnail/'.$homepagephotovideos->img) }}" alt="images">
                            </p>
                        </div>
                        <div class="card-body">
                                    <a href="/{{$homepagephotovideos->id}}/editPV">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $homepagephotovideos->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
