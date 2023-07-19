<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title> @yield('title') </title>
</head>
<body>
    @include('nav')

    <p class="text-3xl font-bold underline text-center bg-blue-300  text-red-900">
        Hello world!
    </p>

    <div class="border border-solid border-red-300 cursor-pointer shadow-lg mb-5">
        <p class="text-red-300">  Hello world! </p>
    </div>

    <div class="...">
        @yield('content')
    </div>
</body>
</html>
