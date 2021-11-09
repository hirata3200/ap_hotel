<html>
    <head>
        <title>Reservation/Index</title>
    </head>
    <body>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <h1>Reservation/Index</h1>

        <table class="table-info">
            <tr><th>ID</th><th>User-ID</th><th>number</th><th>check_in</th><th>check_out</th></tr>
            @foreach ($reservations as $reservation)
            <tr class="table-success">
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->user_id}}</td>
                <td>{{$reservation->number}}</td>
                <td>{{$reservation->check_in}}</td>
                <td>{{$reservation->check_out}}</td>
            </tr>
            @endforeach
        </table>
    </body>
    <style>
        table{
            border: 2px solid;
            margin: 10px;
        }
        tr,td{
            border: dotted;
        }
        th{
            border-bottom: double;
        }
    </style>
</html>