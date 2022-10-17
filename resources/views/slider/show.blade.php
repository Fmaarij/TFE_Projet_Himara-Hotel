@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Phot name : {{ $sliders->title1 }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                        <img class="card-img-top" src="{{ asset('storage/slider_images/thumbnail/' . $sliders->img) }}"
                            alt="gallerimg">
                        <div class="card-body">
                            <p class="card-title">Title2 : {{ $sliders->title2 }}</p>
                            <p class="card-title">Title3 : {{ $sliders->title3 }}</p>
                            <p class="card-title">Title4: {{ $sliders->title4 }}</p>

                        </div>
                        <div class="card-body">
                            <a href="/{{ $sliders->id }}/editslider">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $sliders->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
