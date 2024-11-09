<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Quiz Jaya')</title>
    @vite(['resources/css/app.css', 'resources/js/dashboard.js'])
</head>
<body>
    <x-dashboard.navigation :nama="$nama" />
</body>
</html>
