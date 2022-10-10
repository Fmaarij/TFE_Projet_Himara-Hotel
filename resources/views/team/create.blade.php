@extends('layouts.app')
@section('content')

<div class="col-md-8">
    <div class="section-title">
        <h4>Add A team member </h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add a room FORM -->
    <form action="/storemember" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        <div class="form-group " >
            <input type="hidden" class="form-control" name="name" placeholder="Jeanette " type="text">
        </div>
        <div class="form-group">
            <input class="form-control" name="lastname" placeholder="owens" type="text">
        </div>

        <div class="form-group">
            <input class="form-control" name="post" placeholder="Manager,waiter ..." type="text">
        </div>

        <div class="form-group">
            <input class="form-control" name="details" placeholder="Lorem Ipsum which looks many web sites pass websites is therefore always." type="text">
        </div>
        <div class="form-group">
            {{-- <label for="">Image</label> --}}
            <input class="form-control" name="img"  type="file" id="image">
        </div>
          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection



