<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex align-items-center">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" class="logo-img" width="65" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mx-auto">
                <a class="nav-link {{ request()->is('/home') ? 'active' : '' }}" href="{{ url('/home') }}">Home</a>
                <a class="nav-link {{ request()->is('explore') ? 'active' : '' }}" href="{{ url('/explore') }}">Explore</a>
                <a class="nav-link {{ request()->is('upload') ? 'active' : '' }}" href="{{ url('/upload') }}">Upload</a>
            </div>
        </div>

        <div class="navbar-nav ms-auto">
            <button class="logout-btn">Logout</button>
        </div>
    </div>
</nav>
</body>
</html>
