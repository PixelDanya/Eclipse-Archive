@extends('templates.main')

@section('title', 'О нас')

@section('content')
@include('includes.navbar')

<!-- О проекте -->
<section class="about-section">
    <div class="about-container">
        <div class="about-block">
            <h2>О проекте</h2>
            <p>
                Проект <strong>Eclipse Archive</strong> посвящён космосу и интересным фактам, связанным с Вселенной, планетами и космическими явлениями.
                В нём представлены познавательные сведения о космосе и его особенностях.
                Проект помогает расширить кругозор и узнать больше о мире за пределами Земли.
            </p>
        </div>
        <div class="about-grid">
            <div class="about-card">
                <h3>Контакты</h3>
                <p><strong>Телефон: </strong><a href="tel:+79000000000" class="telephone">+7-900-000-00-00</a></p>
                <p><strong>Email: </strong><a href="mailto:info@example.com" class="email">info@example.com</a></p>
                <div class="contact-links">
                    <a href="https://telegram.org/" target="_blank">
                        <img src="{{ asset('images/telegram.png') }}" alt="telegram">
                    </a>
                    <a href="https://VK.com/" target="_blank">
                        <img src="{{ asset('images/VK.png') }}" alt="github">
                    </a>
                </div>
            </div>
            <div class="about-card">
                <h3>Авторы</h3>
                <div class="author">
                    <span class="author-name">Бойко Даниил</span>
                    <span class="author-role">Backend и Frontend</span>
                </div>
                <div class="author">
                    <span class="author-name">Прудников Александр</span>
                    <span class="author-role">Frontend</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Конец о проекте -->

@include('includes.footer')
@endsection