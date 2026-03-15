@extends('templates.main')

@section('title', 'Страница не найдена')

@section('body-style') style="padding-top: 0;" @endsection

@section('content')
@include('includes.navbar')
<!-- Страница 404 -->
<div class="error-page">
    <video class="error-video" autoplay muted loop playsinline>
        <source src="{{asset('videos/space.mp4')}}" type="video/mp4">
    </video>
    <div class="error-overlay"></div>
    <div class="error-content">
        <h1>404</h1>
        <p>В далекой, далекой галактике эта страница не была найдена</p>
        <a href="/" class="error-btn">На главную</a>
    </div>
</div>
<!-- Конец Страницы 404 -->
@endsection