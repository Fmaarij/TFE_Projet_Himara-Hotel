@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <div class="section-title">
        <h4>Add the bout info</h4>
        <p class="section-subtitle"></p>
    </div>

    {{-- msg  --}}
    @if (session('success'))
    <strong>
        {{ session('success') }}
    </strong>
@endif
    <!-- add a aboutinfo FORM -->
    <form action="/storeabout" method="post" enctype="multipart/form-data"
        class="contact-form" >
        @csrf
        <div class="form-group " >
            <input  class="form-control" name="title" placeholder="Hotel Himara. " type="text">
        </div>
        <div class="form-group">
            <input class="form-control" name="year" placeholder="since 1992" type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="subpara" placeholder="HIGH QUALITY ACCOMMODATION SERVICES " type="text">
        </div>
        <div class="form-group " >
            <input  class="form-control" name="para" placeholder="HIGH QUALITY ACCOMMODATION SERVICES " value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda" type="text">
        </div>

        <div class="form-group">
            <input class="form-control" name="img"  type="file">
        </div>

        <div class="form-group">
            <input class="form-control" name="imgtitle" placeholder="Luxury Hotel" type="text">
        </div>
        <div class="form-group">
            {{-- <label for="">Image</label> --}}
            <input class="form-control" name="imgpara" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo."  type="text">
        </div>
          <div class="form-group">
            <button class="btn mt30">Add</button>
        </div>
    </form>
</div>
@endsection
{{-- $table->string('title')->nullable();
$table->string('year')->nullable();
$table->string('subpara')->nullable();
$table->string('para')->nullable();
$table->string('img')->nullable();
$table->string('imgtitle')->nullable();
$table->string('imgpara')->nullable(); --}}
