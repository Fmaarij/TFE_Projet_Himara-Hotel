@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Title</th>
                    <th >Title Colored</th>
                    <th >Sub para</th>
                    <th >Imgtitle</th>
                    <th >Icon</th>
                    <th >Title side bar</th>
                    <th >Title para</th>
                    <th >Img</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($himaraservices as $serv )
                {{-- {{ dd($serv->roomservice->service )}} --}}
                    <tr class="align-bottom">
                        <td>{{ $serv->title }}</td>
                        <td>{{ $serv->coloredpart }}</td>
                        <td>{{ $serv->subpara }}</td>
                        <td>{{ $serv->imgtitle }}</td>
                        <td class="align-top">
                         <i class="{{ $serv->roomservice->service}}"></i>
                        </td>
                        <td>{{ $serv->titletitle }}</td>
                        <td>{{ $serv->titlepara }}</td>

                        <td width="10%" class="rounded">
                            {{-- <img class="w-100 rounded-circle" src="{{ $team->img }}" alt="memebrs picture"> --}}
                            <img class="w-100 rounded-circle"
                                src="{{ asset('storage/himara_images/thumbnail/' . $serv->img) }}" class="img-fluid"
                                alt="Image">
                        </td>
                        <td>
                            <a href="/{{ $serv->id }}/showHservice">

                                <button class="btn">Show</button>

                            </a>
                        </td>

                        <td>
                            <form action="/{{ $serv->id }}/deleteHservice" method="post" enctype="multipart/form-data">
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
