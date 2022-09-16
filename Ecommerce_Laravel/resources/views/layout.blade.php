<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'ChrisCommerce')</title>
    @section('stylesheet')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @show
</head>
<body>
@if(!request()->is('backoffice/*'))
    @include('includes.header')
@endif
@yield('content')
@if(!request()->is('backoffice/*'))
    @include('includes.footer')
@endif
</body>
</html>
