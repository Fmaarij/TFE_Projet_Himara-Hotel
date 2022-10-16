@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Title</th>
                    <th>Paragraphe </th>
                    <th >Image</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latestnews as $news )
                    <tr class="align-bottom">
                        <td>{{ $news->title }}</td>
                        <td class="align-top">{{ $news->para }}</td>
                        <td width="10%" class="rounded">
                            {{-- <img class="w-100 rounded-circle" src="{{ $team->img }}" alt="memebrs picture"> --}}
                            <img class="w-100 rounded-circle"
                                src="{{ asset('storage/latestnews_images/thumbnail/' . $news->img) }}" class="img-fluid"
                                alt="Image">
                        </td>
                        <td>
                            <a href="/{{ $news->id }}/showLnews">

                                <button class="btn">Show</button>

                            </a>
                        </td>

                        <td>
                            <form action="/{{ $news->id }}/deleteLnews" method="post" enctype="multipart/form-data">
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
