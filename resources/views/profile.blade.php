<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('home') }}">Home</a></li>
        </ul>
    </nav>

    <div class="container">
    <h1>User Profile</h1>
    <div class="profile-info">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Name:</strong> {{ $user->birth }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        @if($user->image)
            <p><strong>Profile Image:</strong></p>
            <div class="profile-image">
                <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" class="profile-circle">
            </div>
        @endif
    </div>
    <div class="profile-actions">
        <a href="{{ route('profile.edit') }}" class="btn-edit">Edit Profile</a>
        <form action="{{ route('profile.destroy') }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('confirm-delete') }}" class="btn-delete">Delete Account</a>
        </form>
    </div>
    <div class="options">
        <p>If you want to learn more about the characters in Sister Location, click on the link below:</p>
        <a href="{{ route('home') }}" class="btn-learn-more">Learn More</a>
        <a href="{{ route('home') }}" class="btn-logout">Logout</a>
    </div>
</div>
</body>
</html>
