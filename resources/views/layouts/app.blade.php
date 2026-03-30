<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Nusantara Academy — Inspiring Excellence, Shaping Future Leaders through Quality Education.')">
    <meta name="robots" content="index, follow">
    <title>@yield('title', 'Nusantara Academy') — Excellence in Education</title>

    {{-- Preconnect for performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-surface-800 bg-white antialiased">

    @include('components.navbar')

    <main id="main-content">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
