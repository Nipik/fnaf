<!DOCTYPE html>
<html>
<head>
    <title>Confirmation of Deletion</title>
    <link rel="stylesheet" href="{{ asset('css/confirm-delete.css') }}">
</head>
<body>
    <h1>Delete Confirmation</h1>
    <p>Are you sure you want to delete your profile? This action is irreversible, and we'll miss you!</p>
    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="cute-button">Confirm</button>
    </form>
    <a href="{{ route('profile') }}" class="cute-link">Cancel</a>
    <script>

    document.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector("form");
        form.addEventListener("submit", function(event) {
            event.preventDefault();

            document.body.style.animation = "fade-out 0.5s ease-in-out forwards";
            setTimeout(function() {
                form.submit(); 
            }, 500); 
        });
    });

    </script>
</body>
</html>
