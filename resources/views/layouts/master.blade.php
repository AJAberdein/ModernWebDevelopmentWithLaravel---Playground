<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::secure('src/css/main.css') }}">
        <!--secure as apposed to to forces an https request-->
        @yield('styles')
    </head>
    <body>

    <a href="{{ route('home') }}">Go Home</a>


    @include('includes.header')

        <div class="main">

            @yield('content')

        </div>
    </body>
</html>