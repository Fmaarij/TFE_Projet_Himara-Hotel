@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Photo name </th>
                    <th >category</th>
                    <th >image</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gallery as $gal )
                    <tr class="align-bottom">
                        <td>{{ $gal->galname }}</td>
                        <td class="align-top">{{ $gal->category->catname }}</td>
                        <td width="10%" class="rounded">
                            {{-- <img class="w-100 rounded-circle" src="{{ $team->img }}" alt="memebrs picture"> --}}
                            <img class="w-100 rounded-circle"
                                src="{{ asset('storage/gallery_images/thumbnail/' . $gal->img) }}" class="img-fluid"
                                alt="Image">
                        </td>
                        <td>
                            <a href="/{{ $gal->id }}/showimg">

                                <button class="btn">Show</button>

                            </a>
                        </td>

                        <td>
                            <form action="/{{ $gal->id }}/deleteimg" method="post" enctype="multipart/form-data">
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
