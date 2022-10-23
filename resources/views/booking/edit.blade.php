@extends('layouts.app')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6"
        style="background: url(/images/breadcrumb.jpg); background-repeat: no-repeat;
 background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>Booking Form Update</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Booking Form Update</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main>
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-lg-9 col-12">
                    <div class="section-title">
                        <h4>UPDATE YOUR STAY</h4>
                        <p class="section-subtitle">Book your Room Now</p>
                    </div>
                    <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia deleniti fuga
                        recusandae perferendis modi voluptate, ad ratione saepe voluptas nam provident reiciendis velit
                        nulla repellendus illo consequuntur amet similique hic.</p>
                    <!-- BOOKING FORM -->
                    <form action="/{{ $booking->id }}}/updatebookings" method="post" enctype="multipart/form-data"
                        class="booking-form-advanced" id="">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input name="booking_name" type="text" class="form-control"
                                        value="{{ $booking->booking_name }}" readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" name="booking_email" type="email"
                                        value="{{ $booking->booking_email }}" readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="booking_phone" type="text" class="form-control"
                                        value="{{ $booking->booking_phone }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" title="Select Your Country"
                                        data-header="Select Your Country" data-live-search="true" data-size="5"
                                        name="booking_country" value="{{ $booking->booking_country }}" readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div>
                                        <p> Date chossed : {{ $booking->booking_date }}</p>
                                    </div>
                                    <label>CHECK-IN/OUT
                                        <a href="#" title="Check-In / Check-Out" data-toggle="popover"
                                            data-placement="top" data-trigger="hover"
                                            data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input type="text" class="datepicker form-control " name="booking_date"
                                        readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Guests
                                        <a href="#" title="Guests" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please Select Adults / Children">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <div class="panel-dropdown">
                                        <div class="form-control guestspicker">Guests
                                            <span class="gueststotal"></span>
                                        </div>
                                        <div class="panel-dropdown-content">
                                            <div class="guests-buttons">
                                                <label>Adults
                                                    <a href="#" title="" data-toggle="popover"
                                                        data-placement="top" data-trigger="hover" data-content="18+ years"
                                                        data-original-title="Adults">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="booking_adult"
                                                        value="{{ $booking->booking_adult }}" class="booking-guests"
                                                        value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                            <div class="guests-buttons">
                                                <label>Cildren
                                                    <a href="#" title="" data-toggle="popover"
                                                        data-placement="top" data-trigger="hover"
                                                        data-content="Under 18 years" data-original-title="Children">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="booking_child"
                                                        value="{{ $booking->booking_child }}" class="booking-guests"
                                                        value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Room</label>
                                    {{-- {{dd($booking->rooms->typeofroom->type_name)}} --}}
                                    {{-- {{dd($booking->rooms->price)}} --}}
                                    <div class="">Chossed : {{ $booking->rooms->typeofroom->type_name }} price :
                                        {{ $booking->rooms->price }}€ </div>
                                    <select name="room_id" class="form-control" title="Select A Room "
                                        data-header="Select Room Type">
                                        @foreach ($rooms as $room)
                                            @if ($room->checkin == 0 && $room->checkout == 0)
                                                <option value="{{ $room->id }}"
                                                    data-subtext="<span class='badge badge-info'>€

                           {{ $room->price }},

                           / night</span>">
                                                    {{ $room->typeofroom->type_name }}
                                            @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Your Comments</label>
                                    <textarea class="form-control" name="booking_comments" value="">{{ $booking->booking_comments }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn mt50 float-right">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- SIDEBAR -->
                {{-- <div class="col-lg-3 col-12">
           <div class="sidebar">
             <div class="contact-details">
               <div class="section-title">
                 <h4>OFFERS</h4>
                 <p class="section-subtitle">CHECK OUT OUR SPECIAL OFFERS</p>
               </div>
               <div class="offer-item sm mb50">
                 <figure class="gradient-overlay-hover link-icon">
                   <a href="offer.html">
                     <img src="images/offers/offer1.jpg" class="img-fluid" alt="Image">
                   </a>
                 </figure>
                 <div class="ribbon">
                   <span>HOT OFFER</span></div>
                 <div class="offer-price uppercase">
                   5 nights for €1,875
                 </div>
                 <h3 class="offer-title">
                   <a href="offer.html">x</a>
                 </h3>
               </div>
               <!-- ITEM -->
               <div class="offer-item sm mb50">
                 <figure class="gradient-overlay-hover link">
                   <a href="offer.html">
                     <img src="images/offers/offer2.jpg" class="img-fluid" alt="Image">
                   </a>
                 </figure>
                 <div class="ribbon">
                   <span>HOT OFFER</span></div>
                 <div class="offer-price">
                   8 nights for €2,000
                 </div>
                 <h3 class="offer-title">
                   <a href="offer.html">All-Inclusive Family Package</a>
                 </h3>
               </div>
               <!-- ITEM -->
               <div class="offer-item sm mb50">
                 <figure class="gradient-overlay-hover link">
                   <a href="offer.html">
                     <img src="images/offers/offer3.jpg" class="img-fluid" alt="Image">
                   </a>
                 </figure>
                 <div class="ribbon">
                   <span>HOT OFFER</span></div>
                 <div class="offer-price">
                   3 nights for €268
                 </div>
                 <h3 class="offer-title">
                   <a href="offer.html">Fly, Stay and Save Over 30%</a>
                 </h3>
               </div>
             </div>
           </div>
         </div> --}}
            </div>
        </div>
    </main>
@endsection
