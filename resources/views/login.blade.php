<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="login-container">
        <h3 class="text-center">Login</h3>
        <hr>

        <div class="d-grid gap-2">
            <a href="{{ url('auth/google') }}" class="btn btn-danger">
                <img src="https://developers.google.com/identity/images/g-logo.png" width="20" class="me-2">
                Login with Google
            </a>
        </div>

        <hr>
        <p class="text-center">Or return to <a href="{{ url('/') }}">Home</a></p>
    </div>
</div>

</body>
</html>
