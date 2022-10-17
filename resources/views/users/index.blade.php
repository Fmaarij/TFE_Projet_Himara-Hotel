@extends('layouts.app')
@section('content')
    <h1 class="text-center">All Users</h1>
    <div class="p-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($users as $user)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/user_images/thumbnail/' . $user->img) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $user->name }} {{ $user->lastname }}</h5>
                            <p class="card-text">{{ $user->age }}</p>
                            <p class="card-text">{{ $user->email }}</p>
                            <p class="card-text">{{ $user->role->role }}</p>
                            <p class="card-text"><small class="text-muted">{{ $user->created_at }}</small></p>
                            <div class="d-flex justify-content-between">
                                <div class="">

                                    <a href="/{{ $user->id }}/showuser">
                                        <button class="bg-primary tex-light">
                                            Show
                                        </button>
                                    </a>
                                </div>
                                <div class="">
                                    <form action="/{{$user->id}}/deleteuser" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-danger tex-light">
                                            Delete
                                        </button>
                                    </form>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
