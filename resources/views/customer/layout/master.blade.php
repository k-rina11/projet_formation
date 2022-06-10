<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('customer/favicon.png')}}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lora:wght@400;700&family=Montserrat:wght@400;500;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('customer/fonts/fontawesome/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/aos/dist/aos.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/choices.js/public/assets/styles/choices.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/flickity-fade/flickity-fade.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/flickity/dist/flickity.min.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/highlightjs/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/jarallax/dist/jarallax.css')}}">
    <link rel="stylesheet" href="{{asset('customer/libs/quill/dist/quill.core.css')}}" />

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('customer/css/theme.min.css')}}">

    
    <title>Skola</title>

</head>
<body class="bg-white">

<main>
    @yield('content')
</main>
@include('customer.share.footer')
@include('customer.share.script')

</body>
</html>