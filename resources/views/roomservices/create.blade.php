@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="section-title">
            <h4>Add room services</h4>
            <p class="section-subtitle"></p>
        </div>

        {{-- msg  --}}
        @if (session('success'))
            <strong>
                {{ session('success') }}
            </strong>
        @endif


        <form action="/storeroomservice" method="post" enctype="multipart/form-data" class="contact-form">
            @csrf
            <label><strong>Roomservices :</strong></label><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label ><input type="checkbox" name="service[]" value="fa fa-coffee">
                    <i class="fa fa-coffee"
                        data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included"
                        data-original-title="Breakfast"></i> : Breakfast</label>

                        <label ><input type="checkbox" name="service[]" value="fa fa-wifi"> <i class="fa fa-wifi"
                            data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi"
                            data-original-title="WiFi"></i> : Internet
                    </label>

                    <label>
                        <input type="checkbox" name="service[]" value="fa fa-television">
                        <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                            data-content="Plasma TV with cable channels" data-original-title="TV"></i> : TV
                    </label>

            </div>
            </div>

            <div class="form-group">
                <button class="btn mt30" type="submit">Add</button>
            </div>
        </form>
    </div>
@endsection

