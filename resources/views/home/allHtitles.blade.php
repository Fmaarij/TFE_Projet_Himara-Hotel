@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Title </th>
                    <th >Subtitle</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homes as $home )
                    <tr class="align-bottom">
                        <td>{{ $home->title }}</td>
                        <td class="align-top">{{ $home->subtitle }}</td>
                        <td>
                            <a href="/{{ $home->id }}/showHtitles">
                                <button class="btn">Show</button>
                            </a>
                        </td>
                        <td>
                            <form action="/{{ $home->id }}/deleteHtitles" method="post" enctype="multipart/form-data">
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
