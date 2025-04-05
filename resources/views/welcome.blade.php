<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="text-center">
        <h1 class="mb-4">Welcome to Laravel 12 🚀</h1>
        <p class="lead">This is your new Laravel application.</p>

        <a href="{{ url('auth/google') }}" class="btn btn-danger mt-3">
            <i class="fab fa-google"></i> Login with Google
        </a>
    </div>

</body>
</html>
