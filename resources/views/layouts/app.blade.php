<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tes Kesehatan Mental' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <header class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="font-bold text-lg text-blue-600">
                MentalCheck
            </h1>
            <span class="text-sm text-gray-500">
                Gratis & Anonim
            </span>
        </div>
    </header>

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t mt-16">
        <div class="max-w-6xl mx-auto px-4 py-6 text-sm text-gray-500 text-center">
            <p>
                Tes ini bersifat skrining awal dan tidak menggantikan diagnosis profesional.
            </p>
        </div>
    </footer>

</body>
</html>
