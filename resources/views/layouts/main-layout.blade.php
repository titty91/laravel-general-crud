<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-general-crud</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    @include('containers.header')
    @yield('contain')
    @include('containers.footer')
</body>
</html>