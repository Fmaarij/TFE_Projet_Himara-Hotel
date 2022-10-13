@extends('layouts.app')
@section('content')
    <div class="p-5">
        <div class="m-4">
            <div class="card text-center">
                <div class="card-header">Title: {{ $himaraservices->title }}</div>
                <div class="card-body">
                    <div class="card m-auto" style="width: 24rem;">
                            <img class="card-img-top" src="{{asset('storage/himara_images/thumbnail/'.$himaraservices->img)}}" alt="gallerimg">

                        <div class="card-body">
                            <p class="card-text">coloredpart : {{ $himaraservices->coloredpart }}</p>
                            <p class="card-text">imgtitle : {{ $himaraservices->imgtitle }}</p>
                            <p class="card-text">subpara :{{ $himaraservices->subpara }}</p>
                            <p class="card-text">titletitle :{{ $himaraservices->titletitle }}</p>
                            <p class="card-text">titlepara :{{ $himaraservices->titlepara }}</p>
                            <p class="card-text">Imgpara : {{ $himaraservices->imgtitle }}</p>
                            <p class="card-text">Icone :
                                {{-- {{dd( $himaraservices->roomservice->service)}} --}}

                                <i class="{{ $himaraservices->roomservice->service}}"></i>
                            </p>
                        </div>

                        <div class="card-body">
                                    <a href="/{{$himaraservices->id}}/editHservice">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">Added : {{ $himaraservices->created_at }}</div>
            </div>
        </div>
    </div>
@endsection
