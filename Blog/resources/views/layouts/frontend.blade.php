<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | MySimpleBlog</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <div class="container">
        <h1>My Simple Blog</h1>
        <p>By PHP Framework</p>
    </div>
</header>
<main class="container">
    @yield('content')
</main>
<footer>
    <div class="container">
        &copy; {{ date("Y") }} CVO De Verdieping |
        <a href="#">Admin</a>
    </div>
</footer>
</body>
</html>