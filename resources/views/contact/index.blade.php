@extends('layouts.app')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6"
        style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>CONTACT</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title">
                        <h4>CONTACT US</h4>
                        <p class="section-subtitle">Let’s Talk</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda
                        corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.</p>
                    <!-- CONTACT FORM -->
                    <form action="/storecontact" method="post" enctype="multipart/form-data" class="contact-form">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Name" type="text">
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="latitude" id="latitude" value="{{$contactinformation[0]->latitude}}" type="hidden">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="longitude" id="longitude" value="{{$contactinformation[0]->longitude}}" type="hiden">
                        </div>


                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Email" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="phone" placeholder="Phone" type="number">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="subject" placeholder="Subject" type="text">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn mt30">SEND YOUR MESSAGE</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        {{-- maps à revoir --}}
                        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

                        <div id="map" class="h-auto google-map">
                            <div class="toggle-streetview" id="openStreetView">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                            </div>
                            <div id="map-canvas">
                                <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
                                    referrerpolicy="no-referrer-when-downgrade"
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAXYEirsfCi4Ogbv5T1V2NjITBwrjf5sEo
                                    &q={{preg_replace("/\s+/", '+', $contactinformation[0]->adress)}}">
                                </iframe>
                            </div>
                        </div>


                        <script type="text/javascript">
                            function initMap() {

                                var latit = document.getElementById('latitude');
                                var longi = document.getElementById('longitude');
                                const myLatLng = {
                                    // Molengeek
                                    lat= latit;
                                    lng= long;
                                };
                                const map = new google.maps.Map(document.getElementById("map"), {
                                    zoom: 5,
                                    center: myLatLng,
                                });

                                new google.maps.Marker({
                                    position: myLatLng,
                                    map,
                                    title: "maps",
                                });
                            }

                            window.initMap = initMap;
                        </script>

                        <script type="text/javascript"
                            src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
                        {{-- <script type="text/javascript"
                            src="https://maps.google.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap"></script> --}}




                        {{-- end of maps à revoir --}}

                        {{-- maps de base --}}
                        {{-- <div class="google-map">
                            <div class="toggle-streetview" id="openStreetView">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                            </div>
                            <div id="map-canvas"></div>
                        </div> --}}


                        <div class="contact-details mt75">
                            <div class="contact-info">
                                {{-- contactinformation --}}
                                @foreach ($contactinformation as $info)
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i>{{ $info->adress }}</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>{{ $info->email }}</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-phone"></i>{{ $info->gsm }}</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fax"></i>{{ $info->phone }}</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-globe"></i>{{ $info->website }}</a>
                                        </li>
                                    </ul>
                            </div>
                            @endforeach
                            <div class="social-media mt50">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-tripadvisor"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
