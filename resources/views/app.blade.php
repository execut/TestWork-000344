<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Books application') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script type="text/javascript">
            /**
             * @TODO fix for https://github.com/tighten/ziggy/issues/387
             */
            if (Ziggy.url === 'http://books-app.test') {
                Ziggy.url = 'https://books-app.test';
            }
            if (Ziggy.url === 'http://books-app.execut.co') {
                Ziggy.url = 'https://books-app.execut.co';
            }
        </script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
