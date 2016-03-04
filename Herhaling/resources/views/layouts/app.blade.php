<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Task List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="navbar navbar-default">
        <a href="{{ route('home') }}" class="navbar-brand">Tasks list</a>
    </div>


    @yield('content')
</div>
</body>
</html>