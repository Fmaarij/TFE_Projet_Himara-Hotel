@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border ">
            <thead>
                <tr>
                    <th>Tag</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag )
                    <tr>
                        <td>{{ $tag->tagname }}</td>
                        <td>
                            <a href="/{{ $tag->id }}/showcat">
                                <button class="btn">Show</button>
                            </a>
                        </td>
                        <td>
                            <form action="/{{ $tag->id }}/deletecat" method="post" enctype="multipart/form-data">
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
