<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <body>
        <h1>HELLO Laravel<h1>
            <h2>DBから表示中 gitの更新が反映できるか確認！！</h2>
                <h3>git pull　で更新する方法を模索中</h3>
                <a href="{{ route('welcome') }}">welcomeへ</a>
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
                    @endforeach:
                @endisset
    </body>
</html>
