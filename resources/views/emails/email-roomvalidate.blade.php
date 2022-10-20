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
            <th>Type of Room</th>
            <th>City</th>
            <th>price</th>
            <Th>promo</Th>
            <Th>description</Th>
            <th>Message</th>

        </thead>
    </tr>

    <tbody>
        <tr>
            <td class="bg-danger">{{ $data['email'] }}</td>
            <td>{{ $data['typeofroom'] }}</td>
            <td>{{ $data['city'] }}</td>
            <td>{{ $data['price'] }}</td>
            <td>{{ $data['promo'] }}</td>
            <td>{{ $data['description'] }}</td>
            <td>
                Hello,
                    Can you please validate this room to be shown on the website please?
            </td>
        </tr>
    </tbody>
</table>




    </div>
</body>

</html>



{{-- @endsection --}}
