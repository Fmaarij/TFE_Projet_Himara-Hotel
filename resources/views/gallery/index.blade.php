@extends('layouts.app')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6"
        style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
     background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>GALLERY</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Gallery</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
            <div class="gallery-filters">
                <a href="#" data-filter="*" class="filter active">ALL</a>
                <a href="#" data-filter=".filter-restaurnat" class="filter">RESTAURANT</a>
                <a href="#" data-filter=".filter-swimmingpool" class="filter">SWIMMING POOL</a>
                <a href="#" data-filter=".filter-spa" class="filter">SPA</a>
                <a href="#" data-filter=".filter-roomview" class="filter">ROOM VIEW</a>
            </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
            <div class="grid image-gallery row">
                <!-- ITEM -->
                @foreach ($gallery as $gal )
                @if ($gal->category_id !== $gal->category->id )
                <div class="gallery-item filter-all col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}">
                            <img src="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>{{$gal->galname}}</figcaption>
                    </figure>
                </div>

                @elseif ($gal->category_id===2)
                <div class="gallery-item filter-swimmingpool col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}">
                            <img src="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>{{$gal->galname}}</figcaption>
                    </figure>
                </div>


                <!-- ITEM -->
                @elseif ($gal->category_id === 4)
                <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}">
                            <img src="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>{{$gal->galname}}</figcaption>
                    </figure>
                </div>

                <!-- ITEM -->
                {{-- <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery3.jpg">
                            <img src="images/gallery/gallery3.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Cocktail</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- @if ($gal->category_id === 1)
                <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}">
                            <img src="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>{{$gal->galname}}</figcaption>
                    </figure>
                    </figure>
                </div>
                @endif --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery5.jpg">
                            <img src="images/gallery/gallery5.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Playground</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                @elseif ($gal->category_id === 1)
                <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}">
                            <img src="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>{{$gal->galname}}</figcaption>
                    </figure>
                </div>

                <!-- ITEM -->
                {{-- <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery7.jpg">
                            <img src="images/gallery/gallery7.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Wedding Ceremony</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery8.jpg">
                            <img src="images/gallery/gallery8.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Beach</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery9.jpg">
                            <img src="images/gallery/gallery9.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Honeymoon Room</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery10.jpg">
                            <img src="images/gallery/gallery10.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Sea</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                @elseif ($gal->category_id === 3)
                <div class="gallery-item filter-spa col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}">
                            <img src="{{asset('storage/gallery_images/thumbnail/'.$gal->img)}}" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>{{$gal->galname}}</figcaption>
                    </figure>
                    </figure>
                </div>
                <!-- ITEM -->
                {{-- <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery12.jpg">
                            <img src="images/gallery/gallery12.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Restaurant</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item filter-roomview filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery13.jpg">
                            <img src="images/gallery/gallery13.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Restaurant</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery14.jpg">
                            <img src="images/gallery/gallery14.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Sea</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery15.jpg">
                            <img src="images/gallery/gallery15.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Restaurant</figcaption>
                    </figure>
                </div> --}}
                <!-- ITEM -->
                {{-- <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery16.jpg">
                            <img src="images/gallery/gallery16.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Room View</figcaption>
                    </figure>
                </div> --}}
                @endif
                @endforeach
            </div>
        </div>
    </main>
@endsection
