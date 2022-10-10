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
    <!-- add an image FORM -->
    <form action="/storeimg" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        <div class="form-group " >
            <input  class="form-control" name="img"  type="file">
        </div>

        <div class="form-group">
            <input class="form-control" name="galname" placeholder="Ocean,Appel,Dance,etc..." type="text" >
        </div>
        <div class="form-group">
            <select name="category_id" >
            @foreach ($category as $cat )
            <option value="{{$cat->id}}">{{$cat->catname}}</option>
            @endforeach
        </select>
        </div>
          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection





{{--
'galurl' =>"staff1.jpg",
'galcaption' =>  "Swimming pool",
'category_id' =>2, --}}
