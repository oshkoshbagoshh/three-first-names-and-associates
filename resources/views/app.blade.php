<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--TODO: ADD FAVICON --}}
    <link rel="icon" type="image/png" href="{{asset('favicon/favicon-48x48.png') }}" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="{{asset('favicon/favicon.svg')}}"  />
{{--    <link rel="shortcut icon" href="/favicon.ico" />--}}
{{--    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />--}}
{{--    <link rel="manifest" href="/site.webmanifest" />--}}

    <title>Three First Names & Associates - CTV Advertising Consulting</title>
    @vite('resources/js/app.js')<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../../public/images/TFN%20Media%20Solutions%20Logo_Color%20with%20Transparent%20Background.png">
        <title>Three First Names & Associates - CTV Advertising Consulting</title>
        @vite('resources/js/app.js')
        @inertiaHead
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            'smoky-black': '#100B00',
                            'indigo': '#440381',
                            'blue-violet': '#8338EC',
                            'sapphire': '#0056BF',
                            'sapphire-dark': '#00449E',
                        },
                        fontFamily: {
                            'sans': ['Open Sans', 'sans-serif'],
                            'rubik': ['Rubik', 'sans-serif'],
                        },
                    },
                },
            }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Rubik:wght@400;500;700&display=swap');
        </style>
    </head>
    <body class="h-full">
    @inertia
    </body>
    </html>

    @inertiaHead
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'smoky-black': '#100B00',
                        'indigo': '#440381',
                        'blue-violet': '#8338EC',
                        'sapphire': '#0056BF',
                        'sapphire-dark': '#00449E',
                    },
                    fontFamily: {
                        'sans': ['Open Sans', 'sans-serif'],
                        'rubik': ['Rubik', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Rubik:wght@400;500;700&display=swap');
    </style>
</head>
<body class="h-full">
@inertia
</body>
</html>
