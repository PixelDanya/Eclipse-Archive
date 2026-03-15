@extends('templates.main')

@section('title', 'Предложить')

@section('content')
@include('includes.navbar')

<!-- Форма -->
<section class="form-section">
    <form class="feedback-form" action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <h2>Оставить предложение</h2>
        <div class="form-row">
            <input type="text" placeholder="Имя" name="first_name" required minlength="2" maxlength="50">
            <input type="text" placeholder="Фамилия" name="last_name" required minlength="2" maxlength="50">
        </div>
        <input placeholder="Email" name="email" required maxlength="70">
        <textarea placeholder="Ваше предложение..." rows="6" name="message" required minlength="4" maxlength="5000"></textarea>
        <input type="hidden" name="time" value="{{ time() }}">
        <button type="submit">Отправить</button>
    </form>
</section>
<!-- Конец формы -->

@if (session('success'))
<!-- Успешное заполнение -->
<section class="form-success">
    <div class="form-success-content">
        <span class="success-icon">✔</span>
        <p>{{ session('success') }}</p>
    </div>
</section>
<!-- Конец успешного заполнение -->
@endif

@if ($errors->any())  
<!-- Ошибка валидации -->
<section class="validation-errors">
    <div class="validation-container">
        <div class="validation-header">
            <h3>Ошибка валидации</h3>
            <p>Пожалуйста, исправьте следующие ошибки:</p>
        </div>
        <ul class="validation-list">
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
</section>
<!-- Конец ошибки валидации -->
@endif

@include('includes.footer')
@endsection