@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Recieved on : {{ $contacts->created_at }}</div>
                <div class="card-body">
                    <h5 class="card-title">Subject : {{ $contacts->subject }}</h5>
                    <p class="card-text">Message : {{ $contacts->message }}</p>
                    {{-- <a href="#" class="btn btn-primary">Know more</a> --}}
                </div>
                <div class="card-footer text-muted">From : {{ $contacts->name }}</div>
            </div>
        </div>
    </div>
@endsection
