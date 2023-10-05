<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lisa</title>
        <link rel="icon" href="images\Lisa Final Logo File_page-0001.jpg" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="{{asset('js/app.js')}} "></script>
        <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      

        <style>
            html{
                overflow-x: hidden !important
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased  overflow-x-hidden">
       <x-header></x-header>
       @yield('content')
    </body>
</html>
