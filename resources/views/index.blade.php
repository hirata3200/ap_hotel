<html>
    <head>
        <title>User/Index</title>
    </head>
    <body>
        <h1>User/Index</h1>
        <p>{{$items}}</p>
        <form method="POST" action="/User">
            @csrf
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>
</html>