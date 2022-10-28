@extends('layouts.app')
@section('content')
<div class="w-75 m-auto">
<div class="card " style="width: 18rem;">
    <div class="w-50 m-auto ">

        <img class=" w-100 mt-3 rounded " src="{{ asset('storage/user_images/thumbnail/' . $users->img) }}" class=" "
        alt="...">
    </div>
    <div class="card-body text-center">
      <p class="card-text">{{$users->name}} {{$users->lastname}}</p>
      <p class="card-text">{{$users->age}}</p>
      <p class="card-text">{{$users->city}}</p>
      <p class="card-text">{{$users->country}}</p>
      <p class="card-text">{{$users->email}}</p>
      <p class="card-text">{{$users->role->role}}</p>
      <p class="card-text">{{$users->created_at}}</p>
    </div>
    <div class="text-center">
        <a href="/{{$users->id}}/edituser">
            <button  class="btn ">Edit</button>
        </a>
    </div>
  </div>
</div>
</div>
@endsection
