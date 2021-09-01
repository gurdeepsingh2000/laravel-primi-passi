<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="https://coursereport-s3-production.global.ssl.fastly.net/uploads/school/logo/681/original/Pittogramma-RGB-1080-BLUE-circle.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>{{$name_website}}</title>
    <style>
       *{
        font-family: 'Roboto', sans-serif;
        }
        body{
            height:100vh;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .content-container{
            display: flex;
            align-items: center;
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
        .menu-bar{
            display: flex;
            justify-content: center;
        }
        .menu-item{
            margin:5px;
        }
    </style>
</head>
<body>
    <section>
    <div class="content-container">

        <div class="name-txt">
            {{$name_website}}
        </div>

        <div class = 'img-container'>
            <img src="{{$LaravelLogo}}" alt="laravel-logo">
        </div>
    </div>


        <div class = 'menu-bar'>
            <div class='menu-item'><a href="{{$documentation}}">Documentation</a></div>
            <div class='menu-item'><a href="{{$about}}">About</a></div>
        </div>

    </section>
</body>
</html>