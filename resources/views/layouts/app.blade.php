<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'UPL_APP')}}</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        @yield('content')
    </body>
</html>
