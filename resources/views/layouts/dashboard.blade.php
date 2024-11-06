<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Quiz Jaya')</title>
    @vite(['resources/css/dashboard.css' ,'resources/js/app.js', 'resources/js/dashboard.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>
