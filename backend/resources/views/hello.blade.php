<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <body>
        <h1>HELLO Laravel Auth<h1>
        @if (Auth::check())
                <p>USER: {{ $user->name. ':' . $user->email }}
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
        @else
        <p>ログインしていません。
            <a href="/register">登録</a>
        @endif
    </body>
</html>
