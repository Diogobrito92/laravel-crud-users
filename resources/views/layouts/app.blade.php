<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('users.index') }}" class="navbar-brand">
            Sistema Laravel
        </a>
    </div>
</nav>

<main class="container mt-4">
    @yield('content')
</main>

</body>
</html>