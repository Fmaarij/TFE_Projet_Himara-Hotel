@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border ">
            <thead>
                <tr>
                    <th>category</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $cat )
                    <tr>
                        <td>{{ $cat->catname }}</td>
                        <td>
                            <a href="/{{ $cat->id }}/showcat">
                                <button class="btn">Show</button>
                            </a>
                        </td>
                        <td>
                            <form action="/{{ $cat->id }}/deletecat" method="post" enctype="multipart/form-data">
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
