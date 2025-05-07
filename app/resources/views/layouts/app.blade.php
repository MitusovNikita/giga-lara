<html>
<head>
    <title>@yield('title', 'Главная страница')</title>
</head>
    @include('partials/header')
<main>
    @yield('content')
</main>
    @include('partials/footer')
</html>




