<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>App name - @yield('title')</title>
    {{--为了更好的查看布局效果，我们在这里引入默认的css、js,主要是 bootstrap、jquery--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container">
    <div class="col-sm-4">
        @section('sidebar')
            这是主布局的侧边栏。
        @show
    </div>
    <div class="col-sm-8">
        @yield('content')
    </div>
</div>
</body>
</html>