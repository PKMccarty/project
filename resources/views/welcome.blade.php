<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <!-- Styles -->
    </head>
    <body>
            <div class="content">
                @include('function.header')
                @include('function.menu')
            <div class="row">
                @include('form.leftpage')
                @include('form.rightpage')
            </div>
            </div>
            <div class="footer">
            <h2>Footer</h2>
        </div>
    </body>
    <script src="{{URL::asset('js/topnav.js')}}"></script>
</html>
