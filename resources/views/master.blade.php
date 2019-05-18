<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" type="text/css" />
    
    <title>@yield('title')</title>
</head>
<body>
    <div class="content">
        @include('function.header')
        @include('function.menu')
        <div class="row">
            @yield('content')
        </div>
    </div>
    <div class="footer"><h2>Footer</h2></div>
</body>
</html>