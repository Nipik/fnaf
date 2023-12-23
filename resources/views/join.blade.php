<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/join.css')}}">
    <title>Join us</title>
</head>
<body>
<div class="content">
    <header>
       <h1>Join us!</h1>
       <img src="{{asset('image/logo.png')}}" width="250px">
    </header>
    <form method="post" action="{{ route('join.store') }}" enctype="multipart/form-data">
        @csrf
        <label id="lblname" class="lblName">Name</label>
        <br>
        <input type="text" id="txtName" class="txtName" placeholder="name" name="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="lblBirth" class="lblBirth">Birth</label>
        <br>
        <input type="date" id="txtBirth" class="txtBirth" name="birth">
        @error('birth')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="lblEmail" class="lblName">Email</label>
        <br>
        <input type="email" id="txtEmail" class="txtEmail" placeholder="email" name="email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="lblPassword" class="lblPassword">Password</label>
        <br>
        <input type="password" id="password" class="password" name="password" placeholder="password">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="lblImage" class="lblImage">Image</label>
        <br>
        <input type="file" id="txtImage" class="txtImage" name="image">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
            
        <input type="submit" value="Join" id="btnJoin">
    </form>
    <div class="options">
            <a href="{{ route('choise') }}" class="btn-signup">Back to choice page</a>
     </div>
</div>    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.querySelector("form");
            form.classList.add("appear");
        });
    </script>



</body>
</html>