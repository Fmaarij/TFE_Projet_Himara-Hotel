@extends('layouts.app')
@section('content')
<div class="p-5">
<div class="card " style="width: 18rem;">
    <img src="{{ asset('storage/user_images/thumbnail/' . $users->img) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">{{$users->name}} {{$users->name}}</p>
      <p class="card-text">{{$users->age}}</p>
      <p class="card-text">{{$users->email}}</p>
      <p class="card-text">{{$users->role->role}}</p>
      <p class="card-text">{{$users->created_at}}</p>
    </div>
    <div class="">
        <a href="/{{$users->id}}/edituser">
            <button>Edit</button>
        </a>
    </div>
  </div>
</div>

@endsection
