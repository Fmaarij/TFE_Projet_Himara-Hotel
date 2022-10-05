@extends('layouts.app')
@section('content')
    <div class="w-50 m-auto">
        @foreach ($contactinformation as $info)
            <form action="/{{ $info->id }}/updatecontactinformation" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mt-3">
                    <div class="col-2">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="col ">
                        <input class="  border-0" type="text" name="adress" value="{{ $info->adress }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col">
                        <input class="  border-0" type="text" name="email" value="{{ $info->email }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="col">
                        <input class="  border-0" type="text" name="phone" value="{{ $info->phone }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="col">
                        <input class="  border-0" type="text" name="gsm" value="{{ $info->gsm }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="col">
                        <input class="  border-0" type="text" name="website" value="{{ $info->website }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col">
                        <button class="btn mt30 ">Update</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
