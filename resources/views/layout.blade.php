@php
use App\Post;
$stats = Post::stats();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/app.css" />
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="#">Стена</a>
            @guest
            <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
            <a class="nav-link" href="{{ route('login') }}">Войти</a>
            @else
            <span class="nav-link ml-auto">{{ '@' . Auth::user()->name }}</span>
            <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
            @endguest
        </nav>
    </div>
</div>

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">@yield('page-title')</h1>
        <p class="lead blog-description">@yield('page-description')</p>
    </div>
</div>

<div class="container">

    <div class="row mb-5">

        <div class="col-sm-8 blog-main">
            @yield('content')
        </div>
        <!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Статистика</h4>
                <p>Всего постов: {{ $stats['count'] }}.</p>
                <p>Дата первого: {{ $stats['first']->created_at->format('d.m.Y') }}.</p>
                <p>Дата последнего: {{ $stats['last']->created_at->format('d.m.Y') }}.</p>
                <p>Автор первого: {{ $stats['first']->user->name }}</p>
                <p>Автор последнего: {{ $stats['last']->user->name }}</p>
            </div>
            <!-- /.blog-sidebar -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <footer class="blog-footer">
        <p>Тестовое задание на должность PHP разработчика.</p>
        <p>
            <a href="#">Наверх</a>
        </p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
