@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border ">
            <thead >
                <tr >
                    <th >Name </th>
                    <th>Last name</th>
                    <th>Post</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->lastname }}</td>
                    <td>{{ $team->post }}</td>
                    <td>{{ $team->details }}</td>
                    <td width="10%" class="rounded">
                        <img class="w-100 rounded-circle" src="{{ $team->img }}" alt="memebrs picture">
                       {{-- <img src="asset('storage/team_images/'.{{ $team->img }})" alt=""> --}}
                    </td>
                    <td>
                        <a href="/{{$team->id}}/showmember">

                            <button class="btn">Show</button>

                        </a>
                    </td>
                              {{-- <td>
                        <a href="/{{$team->id}}/editmember">

                            <button class="btn">Edit</button>

                        </a>
                    </td> --}}

                    <td>
                        <form action="/{{$team->id}}/deletemsg" method="post" enctype="multipart/form-data">
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
