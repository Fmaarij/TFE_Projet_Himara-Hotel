@extends('layouts.app')
@section('content')
    <div class="col-md-8">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h4>Welcome message </h4>
                    <p class="section-subtitle"></p>
                </div>

                <table class="table table-responsive table-hover border ">
                    <thead>
                        <tr>
                            <th>Welcome MSG</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wlcmsg as $msg)
                            @if ($msg != null)
                                <tr>
                                    <td>{{ $msg->wlcmsg }}</td>
                                    <td>
                                        <a href="/{{ $msg->id }}/editwlcmsg">
                                            <button class="bg-primary text-light">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="/{{ $msg->id }}/deletewlcemsg" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-danger text-light">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr class="mt-3 mb-3">
            <div class="col">


                <div class="section-title">
                    <h4>Add a message </h4>
                    <p class="section-subtitle"></p>
                </div>

                {{-- msg  --}}
                @if (session('success'))
                    <strong>
                        {{ session('success') }}
                    </strong>
                @endif

                <form action="/storewlcmsg" method="post" enctype="multipart/form-data" class="form-group">
                    @csrf
                    <label for="">Welcome Message</label>
                    <input class="form-control" name="wlcmsg" type="text">
                    <button class="bg-primary text-light mt-2">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
