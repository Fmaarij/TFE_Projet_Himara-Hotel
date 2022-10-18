@extends('layouts.app')
@section('content')
<div class="w-75 m-auto">


    <div class="col-md-8">
        <div class="section-title">
            <h4>Update the user</h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif
        <!-- update userFORM -->

        <form action="/{{ $users->id }}/updateuser" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input class="form-control" name="name" value="{{ $users->name }}" type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="lastname" value="{{ $users->lastname }}" type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="age" value="{{ $users->age }}" type="number">
            </div>
            <div class="form-group">
                {{-- <input class="form-control" name="role_id" value="{{$role->id}}" type="hidden" > --}}
                <select class="form-control" name="role_id" id="">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input class="form-control" name="email" value="{{ $users->email }}" type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="password" placeholder="************" type="text">
            </div>
            {{-- <div class="" width="10%"> --}}
            <img src="{{ asset('storage/user_images/thumbnail/' . $users->img) }}" class="mb-2">
            {{-- alt="..."> --}}
    {{-- </div> --}}
    <div class="form-group ">
        <input class="form-control" name="img" type="file">
    </div>
    <div class="form-group">
        <button class="btn mt30">Update</button>
    </div>
    </form>
    </div>
</div>
@endsection
