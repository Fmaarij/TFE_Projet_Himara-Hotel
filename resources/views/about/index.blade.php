@extends('layouts.app')
@section('content')
    <div class="p-5">
        <table class="table table-hover border table-responsive ">
            <thead>
                <tr>
                    <th >Title </th>
                    <th >Year</th>
                    <th >Subpara</th>
                    <th>Para</th>
                    <th>ImgTitle</th>
                    <th>ImgCaptiopn</th>
                    <th>Providers</th>
                    <th>Image</th>
                    <th >Show</th>
                    <th >Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about )
                    {{-- @if($about != null) --}}
                    <tr class="align-bottom">
                        <td>{{ $about->title }}</td>
                        <td class="align-top">{{ $about->year }}</td>
                        <td>{{ $about->subpara }}</td>
                        <td>{{ $about->para }}</td>
                        <td>{{ $about->imgtitle }}</td>
                        <td>{{ $about->imgpara }}</td>
                        <td>
                            @php $providers = $about->provider ? json_decode($about->provider, true) : []; @endphp


                            @if ($providers != null)
                                @foreach ($providers as $provid)
                                {{-- {{dd($provid)}} --}}
                                    <img  alt="pic" src="{{asset('storage/about_images/thumbnail/'.$provid)}}">
                                    {{-- @else
                                    <p>nothing</p> --}}
                                @endforeach
                            @endif
                        </td>
                        <td width="10%" class="rounded">
                            <img class="w-100 rounded-circle"
                                src="{{ asset('storage/about_images/thumbnail/' . $about->img) }}" class="img-fluid"
                                alt="Image">
                        </td>
                        <td>
                            <a href="/{{ $about->id }}/showabout">

                                <button class="btn">Show</button>

                            </a>
                        </td>

                        <td>
                            <form action="/{{ $about->id }}/deleteabout" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button class="btn bg-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                    {{-- @endif --}}
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
