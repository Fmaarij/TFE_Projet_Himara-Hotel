@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add an image </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
{{-- 'title',
'coloredpart',
'subpara',
'img',
'imgtitle',
'icon_id',
'titletitle',
'titlepara', --}}
    <!-- add an himara service  FORM -->
    <form action="/storeHservice" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf

        <div class="form-group " >
            <input  class="form-control" name="title"  value="Himara." type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="coloredpart" value="Services"   type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="subpara" value="CHECK OUT OUR AWESOME SERVICES."   type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="imgtitle" value="Swimming Pool"  type="text">
        </div>
        <div class="form-group " >
            <select name="icon_id" id="">
                @foreach ($roomservices as $roomserv )
                <option value="{{$roomserv->id}}">{{$roomserv->service_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group " >
            <input  class="form-control" name="titletitle" value="Swimming Pool"  type="text">
        </div>
        <div class="form-group " >
            <textarea  class="form-control" name="titlepara"  type="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</textarea>
        </div>

        <div class="form-group " >
            <input  class="form-control" name="img"  type="file">
        </div>
          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection
