<html>
    <body>
        <h1>HELLO Laravel<h1>
            <h1>DBから表示しているよ<h1>
            <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
                <br>
                @isset($items)
                    @foreach ($items as $item)
                    <tr>
                        <td>{{$item -> name}}</td>
                        <td>{{$item -> mail}}</td>
                        <td>{{$item -> age}}</td>
                        <br>
                    </tr>
                    @endforeach
                @endisset
    </body>
</html>
