<html>
    <head>
        <title>User/Index</title>
    </head>
    <body>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <h1>User/Index</h1>

        <table class="table-info">
            <tr><th>ID</th><th>Name</th><th>Address</th><th>Tel</th></tr>
            @foreach ($items as $item)
            <tr class="table-success">
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->tel}}</td>
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