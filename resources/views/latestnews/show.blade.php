@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                        <img class="card-img-top" src="{{ asset('storage/latestnews_images/thumbnail/' . $latestnews->img) }}"
                            alt="gallerimg">
                        <div class="card-body">
                            <p class="card-title">Title : {{ $latestnews->title }}</p>
                            <p class="card-title">Paragraphe : {{ $latestnews->para }}</p>
                        </div>
                        <div class="card-body">
                            <a href="/{{ $latestnews->id }}/editLnews">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $latestnews->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
