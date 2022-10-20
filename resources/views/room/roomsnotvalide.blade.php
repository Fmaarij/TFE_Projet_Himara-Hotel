@extends('layouts.app')
@section('content')
    <div class="p-5">
        <h2 class="text-center mb-3">Rooms Not Valided Yet</h2>
        <table class="table table-hover border ">
            <thead>
                <tr>
                    <th>Typeofroom</th>
                    <th>city</th>
                    <th>price</th>
                    <th>promo</th>
                    <th>Validation</th>
                    <th>Validate the room</th>

            </thead>
            <tbody>
                @foreach ($rooms as $roomz)
                    <tr>
                        <td>{{ $roomz->typeofroom->type_name }}</td>
                        <td>{{ $roomz->city }}</td>
                        <td>{{ $roomz->price }}€</td>
                        <td>{{ $roomz->promo }}</td>
                        <td>{{ $roomz->Ptoshow }}</td>
                        <td>
                            <form action="/{{$roomz->id}}/valideroomz" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <button class="btn bg-success">Yes</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
