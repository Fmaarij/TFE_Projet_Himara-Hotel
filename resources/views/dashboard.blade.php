{{-- <x-app-layout> --}}
    @extends('layouts.app')
    @section('content')
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="p-5">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="  text-center p-6 bg-white border-b border-gray-200">
                   <h3 class="text-center">Hello {{Auth::user()->name}}</h3>
                    <div class="card" style="width: 18rem; margin:auto;">
                        <img class="card-img-top rounded-pill w-50 m-auto" src="{{('storage/user_images/thumbnail/' .Auth::user()->img)}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{Auth::user()->name}} {{Auth::user()->lastname}}</h5>
                          <p class="card-text">{{Auth::user()->age}}</p>
                          <p class="card-text">{{Auth::user()->city}}</p>
                          <p class="card-text">{{Auth::user()->country}}</p>
                          <p class="card-text">
                                <a href="/{{Auth::user()->id}}/edituser">
                                    <button class="btn ">Edit</button>
                                </a>
                          </p>
                          {{-- <a href="#" class="btn btn-primary">{{Auth::user()->age}}</a>
                           --}}
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>

    @endsection
{{-- </x-app-layout> --}}
{{--
@extends('layouts.app')
@section('content')

dashboard
@endsection --}}
