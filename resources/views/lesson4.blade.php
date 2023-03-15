<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-vue 4</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        </head>
    <body>
        <div id="app">
            <lesson-4></lesson-4>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
</html>
