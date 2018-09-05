<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>My own dev documentation</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="body">
            <nav class="navbar">
                <ul class="menu-left">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Colors</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="menu-right">
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Sign in</a></li>
                </ul>
            </nav>
            @yield('content')
            <footer>
                Create by Ivan Biedermann mady with love &copy;Copyright
            </footer>
        </div>
    </body>
</html>
