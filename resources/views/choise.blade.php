<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/choise.css') }}">
    <title>Choose option</title>
</head>
<body>
    <div class="container">
        <h1>Choose an option</h1>
        <div class="options">
            <a href="{{ route('connection') }}" class="btn-signin">Do you already have an account?</a>
            <a href="{{ route('join') }}" class="btn-signup">Do you want to join us?</a>
        </div>
    </div>
</body>
</html>
