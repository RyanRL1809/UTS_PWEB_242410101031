<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>AdoptMe - Adopsi Anjing</title>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen text-gray-800">

    <x-navigasi />

    <main class="grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>