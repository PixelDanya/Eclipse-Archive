@extends('templates.main')

@section('title', 'Поиск')


@section('content')
@include('includes.navbar')

<!-- Поиск -->
<section class="search-section">
    <div id="search">
        <search></search>
    </div>
</section>
<!-- Конец поиска -->

@include('includes.footer')
@endsection