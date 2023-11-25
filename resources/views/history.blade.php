@extends('layout.app')
@section('appContent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History of MS Dhoni</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        #linus-img1,
        #linus-img2 {
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #linus-img1 {
            width: 100%;
            max-width: 600px;
            height: auto;
            margin-right: auto;
            margin-left: auto;
            display: block;
        }

        #linus-img2 {
            width: 100%;
            max-width: 450px;
            height: auto;
            margin-right: auto;
            margin-left: auto;
            display: block;
        }

        .right-block,
        .left-block {
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .info-section {
            width: 70%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 50px;
        }

        .sub-heads {
            text-align: center;
            font-weight: 700;
            font-family: 'serif';
            color: #fe4c1c;
            font-size: 36px;
            margin-bottom: 30px;
        }

        @media only screen and (max-width: 768px) {
            .info-section {
                width: 90%;
            }

            #linus-img1,
            #linus-img2 {
                max-width: 100%;
            }

            .sub-heads {
                margin-left: 0;
            }
        }
    </style>

</head>

<body>
    <h1 class="sub-heads">History of MS Dhoni</h1>

    <div class="info-section">
        <img src="/images/msd3.jpg" alt="MS Dhoni Image" id="linus-img1">
        <div class="right-block">
            <p>
                Mahendra Singh Dhoni, commonly known as MS Dhoni, was born on July 7, 1981, in Ranchi, Jharkhand, India. Before becoming a cricket icon, Dhoni had a humble beginning. He grew up in a middle-class family and initially played badminton and football. It was only later in his life that he developed a keen interest in cricket.
                Dhoni made his debut for the Bihar cricket team in the 1999-2000 season. His talent as a wicketkeeper-batsman quickly caught the attention of selectors, and he was included in the India A team. His impressive performances at the domestic and A levels paved the way for his inclusion in the Indian national team.
                In 2004, Dhoni made his international debut in an ODI against Bangladesh. His aggressive batting style and lightning-fast wicketkeeping soon became his trademark. Dhoni's big breakthrough came during the inaugural ICC World T20 in 2007 when he captained a young Indian team to victory, defeating Pakistan in a thrilling final.
            </p>
        </div>
    </div>

    <div class="info-section">
        <img src="/images/msd4.jpg" alt="MS Dhoni Image" id="linus-img2">
        <div class="left-block">
            <p>
                In 2008, Dhoni was appointed the captain of the Indian cricket team in all three formats. Under his leadership, India achieved numerous milestones, including becoming the number one team in Test cricket. Dhoni's calm demeanor, strategic acumen, and ability to handle pressure earned him the nickname "Captain Cool."
                Dhoni's leadership reached its pinnacle in 2011 when he led India to victory in the ICC Cricket World Cup. The final against Sri Lanka at Wankhede Stadium in Mumbai is etched in cricketing history, with Dhoni sealing the win with a six.
                In 2020, Dhoni announced his retirement from international cricket, marking the end of an illustrious career. His contributions to Indian cricket and his impact as a leader are widely acknowledged, making him one of the most iconic figures in the history of Indian sports.
            </p>
        </div>
    </div>

</body>

</html>
@endsection
