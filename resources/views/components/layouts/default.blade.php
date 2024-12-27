<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/global.css') }}">
  <title>@yield('title', 'English')</title>
</head>
<body>

<header class="header">
  <menu>
    <a href="/">{{ __('Home') }}</a>
    <a href="/pages/lessons">{{ __('Lessons') }}</a>
    <a href="/pages/tests">{{ __('Tests') }}</a>
    <a href="/pages/dictionary">{{ __('Dictionary') }}</a>
  </menu>
</header>

{{ $slot }}