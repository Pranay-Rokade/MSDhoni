@extends('layout.app')
@section('appContent')
<h1>About</h1>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet"><style>
        body{
            font-family: 'Poppins', sans-serif;
            background:url('https://images.indiafantasy.com/wp-content/uploads/20230216151756/dhoni-wallpaper.jpg') no-repeat;
            background-size: cover;
            background-position: center bottom;
            font-weight: bold;
            min-height: 100vh;
        }
        .contents{
            display:flex;
            flex-direction: column;
            width:50%;
            margin:25px 0px;

        }
        /* Styles to position the image at the top-right corner */
.content {
  position: relative;
  /* Ensure the content area has a relative position */
  padding-top: 10px; /* Adjust this value to create space for the image */
}

.corner-image {
    position: absolute;
    top: -447px;
    right: 47px;
    max-width: 562px;
    height: auto;
}

p{
    font-size: 18px;
    line-height: 1.6;
    color: #f70909;
    font-weight: bold;
}
b {
    font-size: 30px;
    color: #097cf7;
}
    </style>
</head>
<body>
    <div class="contents">
        <b>Aspects of Mahendra Singh Dhoni</b><br>
        <p>Early Life and Background:</p>
        MS Dhoni was born on July 7, 1981, in Ranchi, Bihar (now in Jharkhand), India. He comes from a modest background and started his cricketing journey as a goalkeeper in football and later shifted to cricket.<br>

        <p>Educational Background:</p>
        Dhoni was a diligent student and holds a degree in Bachelor of Commerce from St. Xavier's College, Ranchi. <br>

        <p>Love for Bikes: </p>
        Dhoni has a passion for bikes and owns an impressive collection of motorcycles. He has been seen riding bikes frequently, and his love for two-wheelers is well known.<br>

        <p>Military Connection: </p>
        MS Dhoni has an honorary rank of Lieutenant Colonel in the Indian Army. He completed a brief training with the Territorial Army in 2011 and has been actively involved in various activities supporting the armed forces. <br>

        <p>Helicopter Shot:</p>
        Dhoni is famous for his unorthodox and highly effective "helicopter shot." This shot involves a powerful flick of the wrists, creating a unique and powerful stroke.<br>

        <p>Captain Cool Persona:</p>
        Dhoni earned the nickname "Captain Cool" for his calm and composed demeanor on the field, especially during pressure situations. His ability to keep his cool under high-pressure scenarios became one of his defining traits.<br>

        <p>Entrepreneurial Ventures:</p>
        Beyond cricket, Dhoni has invested in various business ventures. He is associated with sports-related brands and owns a production house called Rhiti Sports.<br>

        <p>Philanthropy Work:</p>
        MS Dhoni is actively involved in philanthropy. He has supported and contributed to various charitable causes, including campaigns for education and healthcare.<br>

        <p>Family Man:</p>
        Dhoni is known to be a family-oriented person. He is married to Sakshi Dhoni, and they have a daughter named Ziva. His family has been a source of support throughout his career.<br>

        <p>Love for Ranchi:</p>
        Despite achieving international fame, Dhoni has maintained strong ties with his hometown, Ranchi. He is known to be deeply rooted in his cultural and regional identity.<br>
    </div>
</body>
@endsection
