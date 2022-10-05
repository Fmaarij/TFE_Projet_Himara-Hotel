@extends('layouts.app')
@section('content')
     <!-- ========== PAGE TITLE ========== -->
     <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
     background-size: cover;">
       <div class="container">
         <div class="inner">
           <h1>ROOMS</h1>
           <ol class="breadcrumb">
             <li>
               <a href="{{url('homepage')}}">Home</a>
             </li>
             <li>Rooms</li>
           </ol>
         </div>
       </div>
     </div>
     <!-- ========== MAIN ========== -->
     <main class="rooms-list-view">
       <div class="container">
         <div class="row">
           <div class="col-lg-9 col-12">
             <!-- ITEM -->
             @foreach ($rooms as $room )
             <div class="room-list-item">
               <div class="row">


                 <div class="col-lg-5">
                   <figure class="gradient-overlay-hover link-icon">
                     <a href="room.html"><img src="{{asset('storage/room/'.$room->img)}}" class="img-fluid" alt="Image"></a>
                   </figure>
                 </div>
                 <div class="col-lg-5">
                   <div class="room-info">
                     <h3 class="room-title">
                       <a href="room.html">{{$room->city}}</a>
                     </h3>
                     <span class="room-rates">
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                     </span>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                     <div class="room-services">
                       <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                         data-content="Breakfast Included" data-original-title="Breakfast"></i>
                       <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                         data-content="Free WiFi" data-original-title="WiFi"></i>
                       <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                         data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                       <span>Beds: 1 King</span>
                       <span>Max Guests: 2</span>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-2">
                   <div class="room-price">
                     <span class="price">€{{$room->price}} / night</span>
                     <a href="{{url('showroom')}}" class="btn btn-sm">view <br> details</a>
                   </div>
                 </div>
               </div>
             </div>
             @endforeach
             <div class="d-flex justify-center">
                {{$rooms->links()}}
            </div>

           </div>
           <div class="col-lg-3 col-12">
             <div class="sidebar">
               <aside class="widget noborder">
                 <div class="search">
                   <form class="widget-search">
                     <input type="search" placeholder="Search">
                     <button class="btn-search" id="searchsubmit" type="submit">
                       <i class="fa fa-search"></i>
                     </button>
                   </form>
                 </div>
               </aside>
               <!-- WIDGET -->
               <aside class="widget">
                 <h4 class="widget-title">CATEGORIES</h4>
                 <ul class="categories">
                   <li>
                     <a href="#">Single Room<span class="posts-num">51</span></a>
                   </li>
                   <li>
                     <a href="#">Double Room<span class="posts-num">24</span></a>
                   </li>
                   <li>
                     <a href="#">Family Room
                       <span class="posts-num">9</span></a>
                   </li>
                   <li>
                     <a href="#">Deluxe Room<span class="posts-num">12</span></a>
                   </li>
                 </ul>
               </aside>
               <!-- WIDGET -->
               <aside class="widget">
                 <h4 class="widget-title">Tags</h4>
                 <div class="tagcloud">
                   <a href="#">
                     <span class="tag">Red</span></a>
                   <a href="#">
                     <span class="tag">Dark</span></a>
                   <a href="#">
                     <span class="tag">Yellow</span></a>
                   <a href="#">
                     <span class="tag">Blue</span></a>
                   <a href="#">
                     <span class="tag">Pink</span></a>
                   <a href="#">
                     <span class="tag">Green</span></a>
                   <a href="#">
                     <span class="tag">Gray</span></a>
                   <a href="#">
                     <span class="tag">Brown</span></a>
                 </div>
               </aside>
             </div>
           </div>
         </div>
       </div>
     </main>
@endsection
