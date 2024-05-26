<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title','weibo app') - Laravel 新手入门教程</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">weibo app</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="/about">about</a></li>
            <li class="nav-item"><a class="nav-link" href="#">contact</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')

</div>
</body>
</html>
