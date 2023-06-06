<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="/media/logo.png">

    {{-- link google fonts --}}
    

    {{-- link fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Cinzia's profile</title>
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }
  
      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }
  
      .swiper {
        width: 50%;
        height: 50%;
        background: #000;
      }
  
      .swiper-slide {
        font-size: 18px;
        color: #fff;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 40px 60px;
      }
  
      .parallax-bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 130%;
        height: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;
      }
  
      .swiper-slide .title {
        font-size: 41px;
        font-weight: 300;
      }
  
      .swiper-slide .subtitle {
        font-size: 21px;
      }
  
      .swiper-slide .text {
        font-size: 14px;
        max-width: 400px;
        line-height: 1.3;
      }
    </style>
  </head>
  <body>
    <x-navbar/>

    {{$slot}}

    <x-footer/>



  </body>
 
</html>