@extends('layout.app')
@section('appContent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements of MS Dhoni</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            font-weight: bold;
        }

        .contents {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 25px 0px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #f70909;
            font-weight: bold;
            margin-bottom: 20px;
        }

        b {
            font-size: 30px;
            color: #097cf7;
        }
    </style>
</head>

<body>
    <div class="contents">
        <b>Achievements of Mahendra Singh Dhoni</b>
        <img src="https://images.indiafantasy.com/wp-content/uploads/20230216151756/dhoni-wallpaper.jpg"
            alt="MS Dhoni Achievements">
        <p>Captaincy Success:</p>
        Led the Indian cricket team to numerous victories across all formats of the game.
        Captain of the Indian team that won the inaugural ICC World Twenty20 in 2007.
        Captained India to the No. 1 ranking in Test cricket for the first time in 2009.
        Guided India to victory in the 2010 and 2016 Asia Cups.<br> <br>
        <p>ICC Cricket World Cup:</p>
        Captained India to victory in the 2011 ICC Cricket World Cup, ending a 28-year drought for India.
        Also led India to the semifinals of the 2015 ICC Cricket World Cup. <br><br>
        <p>ICC Champions Trophy:</p>
        Captained India to victory in the 2013 ICC Champions Trophy in England. <br><br>
        <p>Test cricket record:</p>
        Dhoni is the first Indian wicket-keeper to score 4,000 Test runs.
        After hitting a six in the third Test against England in Southampton, Dhoni completed 50 sixes as a captain, an Indian record.
        Dhoni, with 294 dismissals in his career, ranks first in the all-time dismissals list by Indian wicket-keepers. <br><br>
        <img src="https://wallpapercave.com/wp/wp1862724.jpg" alt="MS Dhoni Achievements"> <br>
        <p>T20I cricket record:</p>
        Dhoni holds the record for playing the most T20I innings (76) and scored the most runs (1,153) before scoring a fifty.
        Most stumpings as wicket-keeper in T20Is (34)
        Most catches as wicket keeper in a T20I innings (5) <br><br>
        <p>ODI cricket record:</p>
        Dhoni is the third captain (and the first non-Australian) overall to win 100 games.
        First player to pass 10,000 runs in ODI cricket with having a career average of over 50.
        Most not outs (84) in ODIs.
        Dhoni's 183* against Sri Lanka in 2005 is the highest score by a wicket-keeper.
        Dhoni and Bhuvneshwar Kumar were involved in a partnership of 100 not out against Sri Lanka, which is India's highest eighth wicket partnership in ODIs.
        Dhoni holds the records of the most dismissals in an innings (6) and career (432) by an Indian wicket-keeper.
        Dhoni has the most stumpings (123) by any wicket-keeper in an ODI career, and is so far the only keeper to pass 100 stumpings. <br><br>
        <p>IPL Success:</p>
        Captained the Chennai Super Kings (CSK) in the Indian Premier League (IPL) and led the team to multiple championships.
        Under Dhoni's leadership, CSK became one of the most successful franchises in IPL history. <br><br>
        <p>Padma Bhushan Award:</p>
        Awarded the Padma Bhushan, India's third-highest civilian award, in 2018. <br><br>
    </div>
</body>

</html>
@endsection
