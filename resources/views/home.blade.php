<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horror Game - Sister location</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="content">
    <header>
        <h1>Sister Location</h1>
        <h2>Horror game new serie of fnaf security...</h1>
        <div class="banner-divider"></div>
    </header>
    <div class="image-container">
        <img class="image" src="{{asset('image\image1.png')}}" alt="Image 1">
        <img class="image" src="{{asset('image\image2.png')}}" alt="Image 2">
        <img class="image" src="{{asset('image\image12.png')}}" alt="Image 4">
        <img class="image" src="{{asset('image\image4.png')}}" alt="Image 5">
        <img class="image" src="{{asset('image\image6.png')}}" alt="Image 7">
        <img class="image" src="{{asset('image\image7.png')}}" alt="Image 8">
        <img class="image" src="{{asset('image\image8.png')}}" alt="Image 9">
        <img class="image" src="{{asset('image\image9.png')}}" alt="Image 10">
        <img class="image" src="{{asset('image\image10.png')}}" alt="Image 11">
    </div>
    <div>
        <p>Five Nights at Freddy's: Sister Location is a survival horror video game where the player takes the role of a late night technician who must survive against murderous animatronics each shift.Unlike previous Five Nights at Freddy's games, the player can crawl between
             different rooms and the objective changes between each of the five nights.
        </p>
    </div>
        <video controls poster="{{asset('image\image11.png')}}">
             <source src="{{asset('video/fnaf.webm')}}" type="video/mp4">
        </video>
        <div class="banner-divider"></div>
        <div class="description-container-left">
            <h2>Hi, Circus baby is here!</h2>
            <p>The game begins with an interviewer questioning William Afton, 
            co-founder of Fazbear Entertainment Inc. and founder of Afton Robotics, 
            LLC — the company responsible for creating the game's animatronic characters 
            — on unspecified design choices he made while building the animatronics</p>
            <p>
            Circus Baby such as dispensing ice cream, inflating balloons, taking song requests,
             and dancing to them. The interviewer is dissatisfied with Afton’s answer, 
             as the features Afton mentioned were not what were being referred to.
            </p>
            <p>
            The perspective then switches to Michael, a new employee of Circus Baby's 
            Entertainment and Rental, an underground facility where various animatronics 
            are stored, to be rented out to children's birthday parties during the day.
            </p>
        </div>
        <div class="description-container-right">
            <img src="{{asset('image\image13.jpg')}}">
            <img src="{{asset('image\image16.jpg')}}">
            <img src="{{asset('image\image17.jpg')}}">
            <img src="{{asset('image\image18.webp')}}">
        </div>
        <hr>
        <img src="{{asset('image\banner.png')}}" alt="banner" class="img-banner">
        <div class="description-final">
            <h2>Reception</h2>
            <p>
            The game received mostly positive reviews. 
            Metacritic gave it an 8.1/10, with TechRaptor rating it
             the highest at a 9. Destructoid appeared to have the 
             lowest, a 6, citing pacing and continued reliance on the tropes 
             that made the original a success. 
            </p>
        </div>
        <div class="banner-dividerr"></div>
        <div class="description-download">
        <h2>Download</h2>
            <p>Download now available in the pc and.</p>
            <a href="{{asset('choise')}}" class="download-button">Download</a>
        </div>
        <div id="image-container">
            <a href="{{asset('choise')}}">
              <img id="image" src="{{ asset('image\imageAv.png') }}" alt="Available">
            </a>
        </div>
        <div class="description-signature">
          <img id="image" src="{{ asset('image\signature.png') }}" alt="Votre image">
        </div>
        <div class="description-doll">
          <a href=""><img id="image" src="{{ asset('image\doll.png') }}" alt="Votre image"></a>
        </div>
        
    </div>
    <div class="description-footer">
        <footer>
            <p class="paragraphe">&copy; Ping- All rights reserved.</p>
        </footer>
    </div>
    <script>
    const images = document.querySelectorAll('.image');
    let currentImageIndex = 0;

    function showNextImage() {
      images[currentImageIndex].style.opacity = 0;
      currentImageIndex = (currentImageIndex + 1) % images.length;
      images[currentImageIndex].style.opacity = 1;
    }
    showNextImage();
    setInterval(showNextImage, 3000);

    window.onload = function() {
        window.scrollTo(0, 0); 
    };

    function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    function changeBorderColor() {
            const imageContainer = document.getElementById('image-container');
            const randomColor = getRandomColor();
            imageContainer.style.borderColor = randomColor;
        }
    setInterval(changeBorderColor, 1000);

  </script>
</body>
</html>
