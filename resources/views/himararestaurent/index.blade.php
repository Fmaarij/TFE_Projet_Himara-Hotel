@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Title </th>
                    <th >Subtitle</th>
                    <th >Subpara</th>
                    <th>ImgTitle</th>
                    <th>Image Para</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($himararestaurants as $res )
                    {{-- @if($about != null) --}}
                    <tr class="align-bottom">
                        <td>{{ $res->title }}</td>
                        <td class="align-top">{{ $res->subtitle }}</td>
                        <td>{{ $res->subpara }}</td>
                        <td>{{ $res->imgtitle }}</td>
                        <td>{{ $res->imgpara }}</td>
                        <td>{{ $res->price }}</td>
                        <td width="10%" class="rounded">
                            <img class="w-100 rounded-circle"
                                src="{{ asset('storage/himararestaurent_images/thumbnail/' .$res->img) }}" class="img-fluid"
                                alt="Image">
                        </td>
                        <td>
                            <a href="/{{ $res->id }}/showHres">

                                <button class="btn">Show</button>

                            </a>
                        </td>

                        <td>
                            <form action="/{{ $res->id }}/deleteHres" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button class="btn bg-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                    {{-- @endif --}}
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
