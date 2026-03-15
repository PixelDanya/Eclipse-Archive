<!-- Навигационная панель -->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo.png') }}" alt="logo" style="width: 60px; height: 60px; margin-right: 10px; border-radius: 5px;">
      </a>
      <h4 class="title">Eclipse Archive</h4>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse position-absolute start-50 translate-middle-x" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('search') ? 'active' : '' }}" href="/search">Поиск</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('feedback') ? 'active' : '' }}" href="/feedback">Предложить</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">О нас</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Конец навигационной панели -->
