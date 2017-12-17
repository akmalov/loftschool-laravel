<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Админка') }}</title>
  <link rel="stylesheet" href="{{asset('css/libs.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  <script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
  </script>
  <style>
    .container {
      width: 1024px;
      margin: 0 auto;
    }
  </style>
</head>
<body style="background: lightgrey;">
<div>
  <div class="container">
    <div class="header-container">
      <div class="authorization-block">
        <a href="/" class="nav-list__item__link">Главная</a>
        @if (Auth::User() && Auth::User()->role_id == 2)
        <a href="/admin" class="nav-list__item__link">Главная админки</a>
        @endif
        @if (Auth::User())
        <a class="nav-list__item__link">{{ Auth::User()->name }}</a>
        <a class="nav-list__item__link" href="{{ route('logout') }}" id="logout">
          Выход
        </a>
        <form style="display: none;" id="logout-form" action="{{ route('logout') }}" method="POST">
          {{ csrf_field() }}
        </form>
        @endif
      </div>
    </div>
  </div>
  @if (Auth::User() && Auth::User()->role_id == 2)
  <div style="background: lightyellow" class="container">
    <ul class="sidebar-category">
      <li class="sidebar-category__item">
        <a class="sidebar-category__item__link" href="/admin/categories">Категории</a></li>
      <li class="sidebar-category__item">
        <a class="sidebar-category__item__link" href="/admin/goods">Товары</a></li>
      <li class="sidebar-category__item">
        <a class="sidebar-category__item__link" href="/admin/orders">Заказы</a></li>
      <li class="sidebar-category__item">
        <a class="sidebar-category__item__link" href="/admin/email">Настройки</a></li>
    </ul>
  </div>
  @endif
</div>
<br><br>
<div>
  @yield('content')
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>