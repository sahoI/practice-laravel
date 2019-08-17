<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
    >
</head>
<body>
<header class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">
            Laravel BBS
        </a>
    </div>
    <div class="mb-4">
        <a href="{{ route('stores.create') }}" class="btn btn-primary">
            店を新規登録する
        </a>
    </div>
    <div class="mb-4">
        <a href="{{ route('items.create') }}" class="btn btn-primary">
            商品を新規登録する
        </a>
    </div>
</header>

<div>
    @yield('content')
</div>
</body>
</html>