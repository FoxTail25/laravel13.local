<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключаем стили Bootstrap из папки public/css/ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title }}</title>

</head>

<body class="d-flex flex-column min-vh-100">
    <x-header.header>
    </x-header.header>

    <main class="container-xl mt-1 flex-grow-1">
        {{ $slot }}
    </main>

    <x-footer.footer>
    </x-footer.footer>

    <!-- Подключаем скрипты Bootstrap (с Popper внутри) из папки public/js/ -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
