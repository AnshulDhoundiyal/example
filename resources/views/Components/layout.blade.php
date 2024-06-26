<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
    <nav>
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="about">About</x-nav-link>
            <x-nav-link href="content">Content</x-nav-link>
        </nav>

        {{ $slot }}
    </body>
</html>