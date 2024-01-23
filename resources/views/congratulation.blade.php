<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulation!</title>
    <link rel="stylesheet" href="{{ asset('css/congratulation.css') }}">
</head>
<body>
    <div class="content">
        <header>
            <h1>Congratulation!</h1>
        </header>
        <div>
            <p>You can now download the game but first if you want to receive news or if a new chapter of the game has been added.</p>
            <p>Do you want to receive notifications about the game?</p>
            <div>
                <img src="{{ asset('image/congratulation.jpg') }}" class="congratulation">
                <img src="{{ asset('image/looking.jpg') }}" class ="looking">
                <button type="button" class="btn-confirm" id="verificationButton">Yes, I want</button>
                <button type="button" class="btn-refuse" id="downloadButton">No, Thanks</button>
            </div>
        </div>
    </div>

    <script>
        var downloadButton = document.getElementById("downloadButton");
        downloadButton.addEventListener("click", function() {
            window.location.href = "{{ route('thankyou') }}";
            var link = document.createElement('a');
            link.href = '{{ asset("wordpress-6.3.2.zip") }}';
            link.download = 'wordpress-6.3.2.zip';
            link.click();
        });

        var verificationButton = document.getElementById("verificationButton");
        verificationButton.addEventListener("click", function() {
            window.location.href = "{{ route('verification') }}";
            
        });
    </script>
</body>
</html>
