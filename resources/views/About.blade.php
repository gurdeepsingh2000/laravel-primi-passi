<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="image/jpg" href="https://coursereport-s3-production.global.ssl.fastly.net/uploads/school/logo/681/original/Pittogramma-RGB-1080-BLUE-circle.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>{{$name_section}}</title>
    <style>
       *{
        font-family: 'Roboto', sans-serif;
        }
        body{
            height:100vh;
            display:flex;
            justify-content: center;
        }
        .page-about{
            
        }
        .content-container{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .img-container{
            height: 120px;
            width: 120px;
            margin-left:10px;
        }
        .img-container img{
            width: 100%;
        }
        .name-txt{
            font-size: 40px;
        }
        .description{
            display:flex;
            justify-content: center;
            margin-top: 15px;
        }
        .description-text{
            width: 60%;
            text-align: center;
        }
        .btn-home{
            height: 6%;
            border-radius:10px;
            background-color: #FF2D20;
            color: white;
            font-weight: bold;
        }

    </style>
</head>
<body>
<button onclick="location.href='{{$homepage}}'" class="btn-home">Get Back To HomePage</button>

<section class="page-about">
    <div class="content-container">

        <div class="name-txt">
            {{$name_section}}
        </div>

        <div class = 'img-container'>
            <img src="{{$LaravelLogo}}" alt="laravel-logo">
        </div>
    </div>

        <div class = 'description'>
            <div class = 'description-text'>{{$description}}</div>
         </div>

    </section>

</body>
</html>