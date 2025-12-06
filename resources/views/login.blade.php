<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="login-box">

        <img src="{{ asset('img/logo.png') }}" class="login-logo mb-3" alt="LearnIt Logo">

        <h2 class="mb-1 fw-bold">Sign in</h2>
        <p class="text-white mb-4">
            or <a href="#" class="text-decoration-underline text-white">create an account</a>
        </p>

        @if ($errors->any())
            <div class="alert alert-danger py-2">
                <ul class="mb-0">
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="">
            @csrf

            <div class="mb-3">
                <input type="email" name="email" class="form-control input-box" placeholder="Email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control input-box" placeholder="Password" required>
            </div>

            <div class="d-flex align-items-center mb-3">
                <input type="checkbox" id="remember" name="remember" class="form-check-input me-2">
                <label for="remember" class="form-check-label text-white">Remember me</label>
            </div>

            <button class="btn btn-primary w-100 sign-in-btn" type="submit">
                Sign in
            </button>

            <div class="text-center mt-3">
                <a href="#" class="text-decoration-none forgot-link">Forgot your password?</a>
            </div>

        </form>

    </div>
</div>

</body>
</html>
