<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1" />
    <title>{{config('app.name','LDC 325 A2')}} - Welcome</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://kit.fontawesome.com/66fc271527.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url({{asset('graphics/png/main-bg.png')}});
        }
        img{
            position: absolute;
            height: 100%;
            width: 100%;
        }
        .img-1{
            height: 30%;
            width: 100%;
        }
        .img-2{
            margin-left: 10%;
            left: 7.48%;
            right: 0.09%;
            top: 2.93%;
            bottom: 79.32%;
        }
        .img-3{
            height: 100%;

        }
    </style>
</head>
<body>
    <header>
        <img class="img-1" src="{{asset('graphics/png/header-gold.png')}}" alt="">
        <img class="img-2" src="{{asset('graphics/png/header-black.png')}}" alt="">
        <img class="img-4" src="{{asset('graphics/png/ellipse-gold.png')}}" alt="">
        <img class="img-4" src="{{asset('graphics/png/logo.png')}}" alt="">
    </header>
</body>
</html>
