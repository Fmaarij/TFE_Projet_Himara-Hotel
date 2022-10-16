@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add News</h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add an news FORM -->
    <form action="/storeLnews" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        <div class="form-group">
            <input class="form-control" name="title" value="10 TIPS FOR HOLIDAY TRAVEL" type="text" >
        </div>
        <div class="form-group">
            <textarea class="form-control" name="para"  type="text" >An examination of how the current political and economical climate is affecting the mental healthcare industry..</textarea>
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
