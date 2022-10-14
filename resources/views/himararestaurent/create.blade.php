@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Update the dishes</h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif
        <!-- add a aboutinfo FORM -->
        <form action="/storeHres" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf
            <div class="form-group ">
                <input class="form-control" name="title" Placeholder="Himara." type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="subtitle" Placeholder="Restaurent" type="text">
            </div>
            <td width="10%" class="rounded">
            <div class="form-group ">
                <input class="form-control" name="subpara"  Placeholder="LIVE A GOURMET DINING EXPERIENCE"
                    type="text">
            </div>
            <div class="form-group ">
                <input class="form-control" name="imgpara" Placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo." type="text">
            </div>
            <div class="form-group">
                <input class="form-control" name="imgtitle" Placeholder="Salat" type="text">
            </div>
            <div class="form-group">
                {{-- <label for="">Image</label> --}}
                <input class="form-control" name="price" Placeholder="16.99" type="number">
            </div>
            <div class="form-group">
                <div class="w-25">
                <input class="form-control" name="img" type="file">
            </div>
            <div class="form-group">
                <button class="btn mt30">Add</button>
            </div>
        </form>
    </div>
@endsection
