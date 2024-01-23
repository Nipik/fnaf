<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css\verification.css')}}">
    <title>Verfication</title>
</head>
<body>
    <div class="container">
    <h1>Success!</h1>
        <p>If there are any updates or news about games, they will be sent to your email.</p>
        <a href="{{asset('home')}}" class="link">Do you want to return to return to the principal page?</a>
        <br>
        <a href="{{asset('connection')}}" class="link-profil">Or to see you profil?</a>
        <br>
        <button type="button" class="link-button" id="downloadButton">Download</button>
    </div>
    <script>
        var downloadButton = document.getElementById("downloadButton");
        downloadButton.addEventListener("click", function() {
            var link = document.createElement('a');
            link.href = '{{ asset("wordpress-6.3.2.zip") }}';
            link.download = 'wordpress-6.3.2.zip';
            link.click();
        });
    </script>
</body>
</html>
