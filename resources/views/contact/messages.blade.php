@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border ">
            <thead >
                <tr >
                    <th >Name </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contact as $msg)
                <tr>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->phone }}</td>
                    <td>{{ $msg->subject }}</td>
                    <td>{{ $msg->message }}</td>
                    <td>
                        <a href="/{{$msg->id}}/showmsg">

                            <button class="btn">Show</button>

                        </a>
                    </td>
                    <td>
                        <form action="/{{$msg->id}}/deletemsg" method="post" enctype="multipart/form-data">
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
