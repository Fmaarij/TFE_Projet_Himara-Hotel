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
                {{-- galleryall --}}
                {{-- @foreach ($gallery as $gal) --}}
                {{-- @if ($gal->category_id !== $gal->category->id) --}}
                @foreach ($galleryall as $all)
                    <div class="gallery-item filter-all col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href="{{ asset('storage/gallery_images/thumbnail/' . $all->img) }}">
                                <img src="{{ asset('storage/gallery_images/thumbnail/' . $all->img) }}" class="img-fluid"
                                    alt="Image">
                            </a>
                            <figcaption>{{ $all->galname }}</figcaption>
                        </figure>
                    </div>
                @endforeach
                {{-- Paginattion --}}
                {{-- <div class="d-flex justify-center">
                    {{ $galleryall->links() }}
                </div> --}}
                {{-- {{dd($galleryall->links()== true)}} --}}
                {{-- @if (($galleryall->links() != true)) --}}


                @foreach ($gallery as $gal)
                    @if ($gal->category_id === 2)
                        <div class="gallery-item filter-swimmingpool col-md-3">
                            <figure class="gradient-overlay image-icon">
                                <a href="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}">
                                    <img src="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}" class="img-fluid"
                                        alt="Image">
                                </a>
                                <figcaption>{{ $gal->galname }}</figcaption>
                            </figure>
                        </div>


                        <!-- ITEM -->
                    @elseif ($gal->category_id === 4)
                        <div class="gallery-item filter-roomview col-md-3">
                            <figure class="gradient-overlay image-icon">
                                <a href="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}">
                                    <img src="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}" class="img-fluid"
                                        alt="Image">
                                </a>
                                <figcaption>{{ $gal->galname }}</figcaption>
                            </figure>
                        </div>

                        <!-- ITEM -->
                    @elseif ($gal->category_id === 1)
                        <div class="gallery-item filter-restaurnat col-md-3">
                            <figure class="gradient-overlay image-icon">
                                <a href="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}">
                                    <img src="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}" class="img-fluid"
                                        alt="Image">
                                </a>
                                <figcaption>{{ $gal->galname }}</figcaption>
                            </figure>
                        </div>
                        <!-- ITEM -->
                    @elseif ($gal->category_id === 3)
                        <div class="gallery-item filter-spa col-md-3">
                            <figure class="gradient-overlay image-icon">
                                <a href="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}">
                                    <img src="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}" class="img-fluid"
                                        alt="Image">
                                </a>
                                <figcaption>{{ $gal->galname }}</figcaption>
                            </figure>
                            </figure>
                        </div>
                    @endif
                    @endforeach
            </div>

        </div>
                 {{-- Paginattion
                 <div class="d-flex justify-center">
                    <div class="w-50 m-auto">
                    {{$galleryall->links()}}
                    </div>
                </div> --}}
    </main>
@endsection
