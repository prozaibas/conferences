<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Test - @yield('title')</title>
</head>
<body>
<div>
    <header style="margin: 10px">
    @guest
    <a href="{{route('login')}}" method="post">Login</a>
    @else
    <a href="{{route('logout')}}" id="logout-btn">Logout ({{auth()->user()->name}})</a>
        <form action="{{route('logout')}}" method="post" id="logout-form" class="d-none">
        @csrf
    </form>
    @endguest
    </header>
    <main class=py-3>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
    </div>
    </main>
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>