@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th>Title1</th>
                    <th>Title2</th>
                    <th>Title3</th>
                    <th>Title4</th>
                    <th>image</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slide)
                    <tr class="align-bottom">
                        <td>{{ $slide->title1 }}</td>
                        <td class="align-top">{{ $slide->title2}}</td>
                        <td class="align-top">{{ $slide->title3}}</td>
                        <td class="align-top">{{ $slide->title4}}</td>
                        <td width="10%" class="rounded">
                            <img class="w-100 rounded-circle"
                                src="{{ asset('storage/slider_images/thumbnail/' . $slide->img) }}" class="img-fluid"
                                alt="Image">
                        </td>
                        <td>
                            <a href="/{{ $slide->id }}/showslider">

                                <button class="btn">Show</button>

                            </a>
                        </td>

                        <td>
                            <form action="/{{ $slide->id }}/deleteslider" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button class="btn bg-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
