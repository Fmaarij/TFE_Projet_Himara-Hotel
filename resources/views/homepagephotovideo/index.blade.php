@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Image Name</th>
                    <th >Video Name</th>
                    <th>Video Link</th>
                    <th >img</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homepagephotovideos as $items )
                {{-- {{ dd($serv->roomservice->service )}} --}}
                    <tr class="align-bottom">
                        <td>{{ $items->imgname }}</td>
                        <td>{{ $items->videoname }}</td>

                        <td >
                            {{-- <iframe width="210" height="157"
                            src="{{$items->videolink}} "  frameborder="0" allowfullscreen>
                            </iframe> --}}
                            <a class="popup-vimeo" href="{{$homepagephotovideos[1]->videolink}}">
                                <i class="fa fa-play"></i>
                            </a>
                        </td>
                        <td width="10%" class="rounded">
                           <img class="img-fluid" alt="Image" class="w-100 rounded-pill" src={{asset('storage/homepagephotovideo/thumbnail/'.$items->img) }}>
                        </td>
                        <td>
                            <a href="/{{ $items->id }}/showPV">

                                <button class="btn">Show</button>
                            </a>
                        </td>
                        <td>
                            <form action="/{{ $items->id }}/deletePV" method="post" enctype="multipart/form-data">
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
