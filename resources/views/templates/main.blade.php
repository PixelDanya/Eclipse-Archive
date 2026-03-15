<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Eclipse Archive, Space, Universe, Galaxy, Stars, Planets, Космос, Вселенная, Галактики, Звезды, Планеты">
    <meta name="description" content="Этот проект посвящён космосу и интересным фактам, связанным с Вселенной, планетами и космическими явлениями. В нём представлены познавательные сведения о космосе и его особенностях. Проект помогает расширить кругозор и узнать больше о мире за пределами Земли.">
    <title>Eclipse Archive: @yield('title')</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body @yield('body-style')>
<div id="loader">
    <loader></loader>
</div>
@yield('content')
</body>
</html>