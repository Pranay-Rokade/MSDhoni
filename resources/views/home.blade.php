@extends('layout.app')
@section('appContent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            margin: 0;
            text-align: center;
        }

        .contents {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 25px auto;
        }

        .slider-imgs {
            width: 94%;
            height: 75%;
            margin-right: 3%;
            margin-left: 3%;
            border-radius: 5px;
            opacity: 1.0;
            box-shadow: 20px 0 200px rgba(0, 0, 0, 2.9) inset;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        .slideshow-container {
            position: relative;
        }

        .mySlides {
            position: relative;
            display: inline-block;
            display: none;
        }
        p{
        font-size: 18px;
        line-height: 1.6;
        color: #0a0a0a;
        font-weight: bold;
    }
    b {
        font-size: 30px;
        color: #097cf7;
    }
    </style>
</head>

<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img class="slider-imgs" src="/images/ms.jpg">
        </div>

        <div class="mySlides fade">
            <img src="/images/msd1.jpg" class="slider-imgs">
        </div>

        <div class="mySlides fade">
            <img src="/images/msd.jpg" class="slider-imgs">
        </div>

        <div class="mySlides fade">
            <img src="/images/msd2.jpg" class="slider-imgs">
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000);
        }
    </script>

    <div class="contents">
        <b>Introduction of Mahendra Singh Dhoni</b><br>
        <p>
            Mahendra Singh Dhoni, commonly known as MS Dhoni, is a former Indian international cricketer
            and one of the most successful cricket captains in the history of Indian cricket. Born on July 7, 1981,
            in Ranchi, Bihar (now in Jharkhand), Dhoni is known for his cool and calm demeanor on the field,
            earning him the nickname "Captain Cool."
        </p><br>
        <p>
            Dhoni made his debut for the Indian cricket team in December 2004 and quickly rose through the ranks,
            showcasing his exceptional skills as a wicketkeeper-batsman. He led the Indian team to numerous victories,
            including the 2007 ICC World Twenty20, the 2010 and 2016 Asia Cups, and the 2011 ICC Cricket World Cup.
        </p><br>
        <p>
            Off the field, MS Dhoni is also involved in various philanthropic activities and has been a prominent
            figure in Indian cricket, inspiring many aspiring cricketers with his leadership and achievements.
        </p><br>
    </div>
</body>

</html>
@endsection
