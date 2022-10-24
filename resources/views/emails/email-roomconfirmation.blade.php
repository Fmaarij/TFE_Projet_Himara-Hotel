{{-- @extends('layouts.app')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail notifcation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <div class="p-5">
<table  class="table table-hover border">
    <tr>

        <thead>
            <th>email</th>
            <th>city</th>
            <th>phone</th>
            <th>guests</th>
            <th>date</th>
            <Th>user_id</Th>
            <Th>room_id</Th>
        </thead>
    </tr>

    <tbody>
        <tr>
            <td class="bg-danger">{{ $data['booking_email'] }}</td>
            <td>{{ $data['booking_country'] }}</td>
            <td>{{ $data['booking_phone'] }}</td>
            <td>{{ $data['booking_guests'] }}</td>
            <td>{{ $data['booking_date'] }}</td>
            <td>{{ $data['user_id'] }}</td>
            <td>{{ $data['room_id'] }}</td>
            <td>
                Hello,
                    Your room has been confirmed.
                    Greeting,
                    Himara Hotel
            </td>
        </tr>
    </tbody>
</table>




    </div>
</body>

</html>



{{-- @endsection --}}
