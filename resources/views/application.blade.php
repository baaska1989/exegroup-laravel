<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-3">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Exe Group') }}</title>
    <link href="/images/icon.ico" rel="icon" type="image/ico" sizes="16x16" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
   <div id="app"></div>
</body>
</html>
