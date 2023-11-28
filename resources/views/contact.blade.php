@extends('layout.app')
@section('appContent')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact of MS Dhoni</title>

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
                max-width: 100%; /* Set the image to 100% of its container */
                height: auto; /* Maintain aspect ratio */
                border-radius: 15px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }

            p {
                font-size: 40px;
                line-height: 1.6;
                color: #0d09f7;
                font-weight: bold;
                margin-bottom: 20px;
            }

            b {
                font-size: 30px;
                color: #097cf7;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            caption {
                color: rgb(255, 0, 0);
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
            }

            /* Blinking Text Animation */
            .blink {
                animation: blinker 1s linear infinite;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
        </style>
    </head>

    <body>
        <div class="contents">
            <b>Contact Information for Mahendra Singh Dhoni</b>

            <table>
                <caption><h1>Professional Contacts</h1></caption>
                <thead>
                    <tr>
                        <th>Contact Name</th>
                        <th>Contact Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MS Dhoni Personal Mobile</td>
                        <td>+91 9904708172</td>
                    </tr>
                    <tr>
                        <td>MS Dhoni Personal Manager</td>
                        <td>+91 9310356697</td>
                    </tr>
                    <tr>
                        <td>MS Dhoni Personal WhatsApp</td>
                        <td>+91 9904708172</td>
                    </tr>
                    <tr>
                        <td>MS Dhoni Official Manager</td>
                        <td>+91 9724232521</td>
                    </tr>
                    <tr>
                        <td>MS Dhoni Official Booking</td>
                        <td>+91 7878249657</td>
                    </tr>
                </tbody>
            </table><br> <br>
            <img src="https://i.pinimg.com/originals/05/1b/6d/051b6d801156d12cd9f173dbbe0d73f0.jpg"
                alt="MS Dhoni Contact">
            <table>
                <caption><h1>Connect on Social Media</h1></caption>
                <thead>
                    <tr>
                        <th>SocialMedia Name</th>
                        <th>Account Name</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>Facebook Fan Page</td>
                    <td>facebook.com/msdofficial</td>
                   </tr>
                   <tr>
                    <td>Twitter Handle</td>
                    <td>twitter.com/msdhoni</td>
                   </tr>
                   <tr>
                    <td>YouTube Channel</td>
                    <td>youtube.com/msdhoni</td>
                   </tr>
                   <tr>
                    <td>Instagram Handle</td>
                    <td>instagram.com/mahi7781</td>
                   </tr>
                   <tr>
                    <td>Google+ Fan Page</td>
                    <td>plus.google.com/+MSDhoni</td>
                   </tr>
                </tbody>
            </table><br>
            <p class="blink">Thank You For Visiting Our Site!!!</p>
        </div>
    </body>

    </html>
@endsection
