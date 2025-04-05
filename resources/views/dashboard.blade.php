<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow-sm">
        <h3 class="text-center">Welcome to Your Dashboard</h3>
        <hr>
        <p class="text-center">You are logged in successfully!</p>

        <div class="text-center">
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

</body>
</html>
