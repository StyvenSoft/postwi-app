<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <title>Postwi App</title>
</head>

<body class="bg-gray-300">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="/"><img class="w-40 pr-3" src="{{ asset('/img/dbeea537.png') }}" alt="Postwi"></a></li>
            <li><a href="/" class="p-3 font-medium">Home</a></li>
            @auth
                <li><a href="{{ route('dashboard') }}" class="p-3 font-medium">Dashboard</a></li>
            @endauth
            <li><a href="{{ route('posts') }}" class="p-3 font-medium">Posts</a></li>
        </ul>
        <ul class="flex items-center">
        @auth
            <li><a href="#" class="p-3">{{ auth()->user()->name }}</a></li>
            <li>
                <form action="{{ route('logout')}}" method="post" class="p-3 inline bg-gray-300 rounded-lg">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
        @endauth
        @guest
            <li><a href="{{ route('login') }}" class="p-3 font-medium">Login</a></li>
            <li><a href="{{ route('register') }}" class="p-3 font-medium bg-gray-300 rounded-lg">Sign up</a></li>
        @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>