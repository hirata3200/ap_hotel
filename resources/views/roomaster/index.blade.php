<html>
    <head>
        <title>roomaster/Index</title>
    </head>
    <body>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <h1>Roomaster/Index</h1>

        <table class="table-info">
            <tr><th>Name</th><th>Max_number</th></tr>
            @foreach ($roomasters as $roomaster)
            <tr class="table-success">
                <td>{{$roomaster->name}}</td>
                <td>{{$roomaster->max_number}}人</td>
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