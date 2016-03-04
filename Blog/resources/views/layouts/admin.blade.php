<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Admin - MySimpleBlog</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<header>
    <div class="container">
        <h1>Admin - MySimpleBlog</h1>
    </div>
</header>
<main class="container">
    <a href="{{ route('auth.logout') }}">Logout</a>
    @yield('content')
</main>
<footer>
    <div class="container">
        &copy; {{ date("Y") }} CVO De Verdieping
    </div>
</footer>
</body>
</html>