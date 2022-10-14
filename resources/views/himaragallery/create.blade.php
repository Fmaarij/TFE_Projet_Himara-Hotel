@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add himara gallery head </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add an himara service  FORM -->
    <form action="/storeHgal" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        <div class="form-group " >
            <input  class="form-control" name="title"  value="Himara." type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="coloredpart" value="Services"   type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="subpara" value="Check out our image gallery"   type="text">
        </div>


        <div class="form-group " >
            <input  class="form-control" name="direct" value="VIEW GALLERY IMAGES"   type="text">
        </div>
          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection
