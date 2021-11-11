<html>
    <head>
        <title>room/Index</title>
    </head>
    <body>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <h1>Room/Index</h1>

        <table class="table-info">
            <tr><th>Room_id</th><th>Max_number</th></tr>
            @foreach ($rooms as $room)
            <tr class="table-success">
                <td>{{$room->room_id}}</td>
                <td>{{$room->room_number}}号室</td>
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
            text-align: center;
        }
        th{
            border: dotted;
            border-bottom: double;
        }
    </style>
</html>