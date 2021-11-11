<html>
    <head>
        <title>reserves/Index</title>
    </head>
    <body>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <h1>Reserves/Index</h1>

        <table class="table-info">
            <tr><th>ID</th><th>Users-ID</th><th>number</th><th>check_in</th><th>check_out</th></tr>
            @foreach ($reserves as $reserve)
            <tr class="table-success">
                <td>{{$reserve->id}}</td>
                <td>{{$reserve->users_id}}</td>
                <td>{{$reserve->number}}人</td>
                <td>{{$reserve->check_in}}</td>
                <td>{{$reserve->check_out}}</td>
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
            border-bottom: double;
        }
    </style>
</html>