@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Category name : {{ $category->catname }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                        <div class="card-body">
                            <a href="/{{$category->id}}/editcat">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $category->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
