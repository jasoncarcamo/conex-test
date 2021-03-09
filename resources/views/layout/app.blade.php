<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Conex - @yield("title")</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="css/app.css" rel="stylesheet"/>
        <link href="css/home/home.css" rel="stylesheet"/>
        <link href="css/home/firstsection.css" rel="stylesheet"/>
        <link href="css/home/secondsection.css" rel="stylesheet"/>
    </head>
    <body>
        @yield("content")
    </body>
</html>