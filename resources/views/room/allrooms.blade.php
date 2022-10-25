@extends('layouts.app')
@section('content')
    <div class="p-5">
        <h2 class="text-center mb-3">Rooms</h2>
        <table class="table table-hover border ">
            <thead>
                <tr>
                    <th>Typeofroom</th>
                    <th>city</th>
                    <th>price</th>
                    <th>promo</th>
                    <th>Validation</th>
                    <th>Show</th>
                    <th>Delete</th>
                    @can('accessadmin')
                    <th>Validate the room</th>
                    @endcan

            </thead>
            <tbody>
                @foreach ($rooms as $roomz)
                    <tr>
                        <td>{{ $roomz->typeofroom->type_name }}</td>
                        <td>{{ $roomz->city }}</td>
                        <td>{{ $roomz->price }}€</td>
                        <td>{{ $roomz->promo }}</td>
                        @if ($roomz->Ptoshow ==0)
                        <td class="text-danger">{{ $roomz->Ptoshow }}</td>
                        @elseif ($roomz->Ptoshow ==1)
                        <td class="text-success">{{ $roomz->Ptoshow }}</td>
                        @endif
                        <td>
                            <a href="/{{$roomz->id}}/showroomz">
                                <button class="btn bg-primary">Show</button>
                            </a>
                        </td>
                        <td>
                            <form action="/{{$roomz->id}}/deleteroomz" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-danger">delete</button>
                            </form>
                        </td>
                        @can('accessadmin')

                        <td>
                            <form action="/{{$roomz->id}}/valideroomz" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @if($roomz->Ptoshow ==0)
                                <button class="btn bg-success">Yes</button>
                                @endif
                            </form>
                        </td>
                        <td>
                            <form action="/{{$roomz->id}}/delroomnotvalidated" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                @if($roomz->Ptoshow ==0)
                                <button class="btn bg-danger">No</button>
                                @endif
                            </form>
                        </td>
                        @endcan

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
