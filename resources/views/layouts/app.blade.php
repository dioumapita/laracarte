<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <!-- Google-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>Laracarte</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            
        }
        footer{
           margin-top: 100px;
        }
    </style>
</head>
<body>
        
        @include('layouts/partials/_nav')
            @yield('content')
        @include('layouts/partials/_footer')

        <script src="/assets/jquery/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>