<!DOCTYPE html>
<html lang="ru">
<head>
    @include('includes.head')
</head>

<body>
    <div class='container'>
        <header class='header row'>
            @include('includes.header')
        </header>
        <main id='main' class='row'>
            @yield('content')
        </main>
        <footer class='footer row'>
            @include('includes.footer')
        </footer>
    </div>
</body>

</html>
