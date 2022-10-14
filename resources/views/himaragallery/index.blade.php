@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Title</th>
                    <th >Title Colored</th>
                    <th>Sub-title</th>
                    <th >Direction</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($himaragallery as $himgal )
                {{-- {{ dd($serv->roomservice->service )}} --}}
                    <tr class="align-bottom">
                        <td>{{ $himgal->title }}</td>
                        <td>{{ $himgal->coloredpart }}</td>
                        <td>{{ $himgal->subpara }}</td>
                        <td>{{ $himgal->direct }}</td>
                        <td>
                            <a href="/{{ $himgal->id }}/showHgal">

                                <button class="btn">Show</button>
                            </a>
                        </td>

                        <td>
                            <form action="/{{ $himgal->id }}/deleteHgal" method="post" enctype="multipart/form-data">
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
