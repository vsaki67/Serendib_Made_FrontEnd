<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SerendibMADE')</title>
    @vite(['resources/css/app.css', 'resources/js/shared.js'])
    
    <!-- Add your fonts if needed -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Raleway&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @yield('scripts')
</body>
</html>