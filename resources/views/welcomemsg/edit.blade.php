@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <div class="col">
        <div class="section-title">
            <h4>Update the welcome message </h4>
            <p class="section-subtitle"></p>
        </div>
        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif

        <form action="/{{$wlcmsg->id}}/updatewlcmsg" method="post" enctype="multipart/form-data" class="form-group">
            @csrf
            @method('PUT')
            <label for="">Welcome Message</label>
            <input class="form-control" name="wlcmsg" value="{{$wlcmsg->wlcmsg}}" type="text">
            <button class="bg-primary text-light mt-2">Update</button>
        </form>
    </div>

</div>
@endsection
