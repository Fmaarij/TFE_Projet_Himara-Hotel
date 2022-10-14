@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add photo or video</h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add an himara photo video  FORM -->
    <form action="/storePV" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        <div class="form-group " >
            <input  class="form-control" name="imgname"  value="Restaurent" type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="videoname" value="pas de video"   type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="videolink" value="https://www.youtube.com/watch?v=_kTDkfo46KY"   type="text">
        </div>


        <div class="form-group " >
            <input  class="form-control" name="img" type="file">
        </div>
          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection
