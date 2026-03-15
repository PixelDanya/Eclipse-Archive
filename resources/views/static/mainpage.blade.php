@extends('templates.main')

@section('title', 'Главная')

@section('content')
@include('includes.navbar')

<!-- main -->
<main class="hero">
  <video class="hero-bg" autoplay muted loop playsinline>
      <source src="{{ asset('videos/space.mp4') }}" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>
  <div class="hero-content">
      <div class="hero-inner">
          <h1>Открой Вселенную</h1>
          <p>
              Изучи интересные факты о далёких галактиках и бескрайнем космосе
          </p>
          <a href="#choice" class="hero-btn">Исследовать</a>
      </div>
  </div>
</main>
<!-- Конец main -->

<!-- Карточки -->
<section class="cards">
  <div class="cards-container">
  <h2>Интересные факты о нашей Вселенной</h2>
    @foreach($cards as $card)
    <div class="card mb-4">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset($card['image']) }}" class="img-fluid rounded-start" alt="{{ $card['alt'] }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $card['title'] }}</h5>
            <p class="card-text">{{ $card['text'] }}</p>
            <p class="card-text"><a class="text-body-secondary" href="#choice">Подробнее...</a></p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
<!-- Конец карточек -->

<!-- Выбор -->
<section class="split-section" id="choice">
  <div class="split-wrapper">
    <div class="split-block">
      <h2>Исследуй космос</h2>
      <p>Узнай больше о планетах и галактиках</p>
      <a href="/search" class="split-btn">Поиск</a>
    </div>
    <div class="split-divider"></div>
    <div class="split-block">
      <h2>Внеси свой вклад</h2>
      <p>Предложи нам что добавить в наш проект</p>
      <a href="/feedback" class="split-btn alt">Предложить</a>
    </div>
  </div>
</section>
<!-- Конец выбора -->

@include('includes.footer')
@endsection