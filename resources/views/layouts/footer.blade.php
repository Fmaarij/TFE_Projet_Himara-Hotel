<!-- ========== FOOTER ========== -->
<footer>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <!-- WIDGET -->

                @foreach ($aboutuse as $about)
                <div class="col-md-3">
                    <div class="footer-widget">
                        {{-- <img src="/images/logo.svg" class="footer-logo" alt="Hotel Himara">
                          --}}
                            <img src="{{ asset('storage/about_images/thumbnail/' . $about->img) }}" class="footer-logo"
                                alt="Hotel Himara">
                            <div class="inner">
                                <p style="  height: 80px;
                             width: auto;
                             overflow-y: auto;">{{ $about->para }}</p>
                        {{-- @endforeach --}}
                        <a href="https://www.tripadvisor.com/" target="_blank">
                            <div class="tripadvisor-banner">
                                <span class="review">Recommended</span>
                                {{-- @foreach ($providers as $prov) --}}
                                    @php $povid = $about->provider ? json_decode($about->provider, true) : []; @endphp
                                    @if ($povid != null)
                                        @foreach ($povid as $provid)
                                            {{-- @else
                                                <p>nothing</p> --}}


                                            {{-- {{dd($prov)}} --}}
                                            {{-- @if ($providers != null) --}}
                                            <img src="{{asset('storage/about_images/thumbnail/'.$provid)}}"
                                                alt="Image">
                                        {{-- @else
                                            <p>nothing</p> --}}
                                        {{-- @endforeach --}}
                                    {{-- @endif --}}
                                    @endforeach
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            <!-- WIDGET -->
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3>Available rooms</h3>
                    <div class="inner">
                        <ul class="latest-posts">
                            @if ($roomdispo != null)
                                @foreach ($roomdispo as $avail)
                                    {{-- {{dd($dispo->type_name)}} --}}
                                    {{-- {{dd($dispo->room)}}</a> --}}
                                    </li>

                                    <li>
                                        <a href="blog-post.html">{{ $avail->availablerooms }}:
                                            {{-- @foreach ($avail->typeofroom as $dispo) --}}
                                            {{-- {{dd($dispo->type_name)}} --}}
                                            {{ $avail->typeofroom->type_name }}
                                            {{-- @endforeach --}}
                                        </a>
                                    </li>
                                    {{-- @endforeach --}}
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- WIDGET -->
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3>USEFUL LINKS</h3>
                    <div class="inner">
                        <ul class="useful-links">
                            <li>
                                <a href="{{ url('homepage') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ url('homepage') }}">Shop</a>
                            </li>
                            <li>
                                <a href="{{ url('gallery') }}">Himara Gallery</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">Our Location</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- WIDGET -->
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3>Contact Info</h3>
                    <div class="inner">
                        @foreach ($contactinfo as $info)
                            <ul class="contact-details">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    {{ $info->adress }}
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    Phone: {{ $info->phone }}
                                </li>
                                <li>
                                    <i class="fa fa-fax"></i>
                                    Fax: {{ $info->gsm }}
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    Web: {{ $info->website }}
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    Email:
                                    <a href="mailto:info@site.com">{{ $info->email }}</a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- SUBFOOTER -->
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyrights">&copy; 2018 Hotel Himara. Designed by
                        <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-media">
                        <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
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
                        <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
