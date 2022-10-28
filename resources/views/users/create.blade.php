@extends('layouts.app')
@section('content')
<div class="w-75 m-auto">
<div class="col-md-8">
    <div class="section-title">
        <h4>Registration</h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add an image FORM -->
    @include('validation')
    <form action="/storeuser" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        <div class="form-group">
            <input class="form-control" value="{{old('name')}}" name="name" placeholder="Michel" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" value="{{old('lastname')}}" name="lastname" placeholder="James" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" value="{{old('city')}}" name="city" placeholder="Brussels" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" value="{{old('country')}}" name="country" placeholder="Belgium" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" value="{{old('age')}}" name="age" placeholder="23" type="number" >
        </div>
        {{-- <div class="form-group">
            <input class="form-control" value="0" name="room_id" type="hidden" >
        </div>
        <div class="form-group">
            <input class="form-control" value="0" name="latestnews_id" type="hidden" >
        </div>
        <div class="form-group"  >
            <input class="form-control"  name="role_id" value="4" type="hidden" > --}}
            {{-- <select  type="hidden"  class="form-control" name="role_id" >
                @foreach ($roles as $role)
                <option  value="{{$role->id}}">{{$role->role}}</option>
                @endforeach
            </select> --}}
        {{-- </div> --}}
        {{-- <div class="form-group"  >
            <input class="form-control"  name="latestnews_id" value="0" type="hidden" >

        </div> --}}
        <div class="form-group">
            <input class="form-control" value="{{old('email')}}" name="email" placeholder="James@gmail.com" type="text" >
        </div>
        <div class="form-group">
            <input class="form-control" value="{{old('password')}}" name="password" placeholder="************" type="text" >
        </div>
        <div class="form-group " >
            <input  class="form-control" value="{{old('img')}}" name="img"  type="file">
        </div>
          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
</div>
@endsection
