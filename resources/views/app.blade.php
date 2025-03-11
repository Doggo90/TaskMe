<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<style>
    body{
        background-color: #090909cc
    }
</style>

<body >

    <main class="main-content">
        @yield('content')
    </main>
    @vite('resources/js/app.js')
</body>

</html>

