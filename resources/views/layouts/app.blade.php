<!DOCTYPE html>
<html lang="ru">
<head>
  <base href="/">
  <title>{{$title_page}} - ГеймсМаркет</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="{{asset('css/libs.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<div class="main-wrapper">
  <header class="main-header">
    <div class="logotype-container">
      <a href="/" class="logotype-link">
        <img src="{{asset('img/logo.png')}}" alt="Логотип">
      </a>
    </div>
    <nav class="main-navigation">
      <ul class="nav-list">
        <li class="nav-list__item">
          <a href="/" class="nav-list__item__link">Главная</a>
        </li>
        @if (Auth::check())
        <li class="nav-list__item">
          <a href="/orders" class="nav-list__item__link">Мои заказы</a>
        </li>
        @endif
        <li class="nav-list__item">
        @if (Auth::User() && Auth::User()->role_id == 2)
          <a href="/admin" class="nav-list__item__link">Админка</a>
        @endif
        </li>
      </ul>
    </nav>
    <div class="header-contact">
      <div class="header-contact__phone">
        <a href="tel:3333333" class="header-contact__phone-link">Телефон: 33-333-33</a>
      </div>
    </div>
    <div class="header-container">
      <div class="payment-container">
        <div class="payment-basket__status">
          <div class="payment-basket__status__icon-block">
            <a class="payment-basket__status__icon-block__link">
              <i class="fa fa-shopping-basket"></i>
            </a>
          </div>
          <div class="payment-basket__status__basket">
            <span class="payment-basket__status__basket-value">0</span>
            <span class="payment-basket__status__basket-value-descr">товаров</span>
          </div>
        </div>
      </div>
      <div class="authorization-block">
        @if (Auth::guest())
        <a href="{{ route('register') }}" class="authorization-block__link">Регистрация</a>
        <a href="{{ route('login') }}" id="login" class="authorization-block__link">Войти</a>
        @else
          {{ Auth::User()->name }}
          <a href="{{ route('logout') }}" id="logout">
            Выход
          </a>
          <form style="display: none;" id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
          </form>
        @endif
      </div>
    </div>
  </header>
  <div class="middle">
    <div class="sidebar">
      <div class="sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
          <ul class="sidebar-category">
            @foreach($categories as $category)
              <li class="sidebar-category__item">
                <a href="/category/{{$category->id}}" class="sidebar-category__item__link">{{$category->name}}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="sidebar-item">
        <div class="sidebar-item__title">Последние новости</div>
        <div class="sidebar-item__content">
          <div class="sidebar-news">
            <div class="sidebar-news__item">
              <div class="sidebar-news__item__preview-news">
                <img src="{{asset('img/cover/game-2.jpg')}}" alt="image-new" class="sidebar-new__item__preview-new__image">
              </div>
              <div class="sidebar-news__item__title-news">
                <a href="#" class="sidebar-news__item__title-news__link">О
                  новых играх в режиме VR</a>
              </div>
            </div>
            <div class="sidebar-news__item">
              <div class="sidebar-news__item__preview-news">
                <img src="{{asset('img/cover/game-1.jpg')}}" alt="image-new" class="sidebar-new__item__preview-new__image">
              </div>
              <div class="sidebar-news__item__title-news">
                <a href="#" class="sidebar-news__item__title-news__link">О
                  новых играх в режиме VR</a>
              </div>
            </div>
            <div class="sidebar-news__item">
              <div class="sidebar-news__item__preview-news">
                <img src="{{asset('img/cover/game-4.jpg')}}" alt="image-new" class="sidebar-new__item__preview-new__image">
              </div>
              <div class="sidebar-news__item__title-news">
                <a href="#" class="sidebar-news__item__title-news__link">О
                  новых играх в режиме VR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-content">
      <div class="content-top">
        <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать
          Steam игры после оплаты
        </div>
        <div class="slider">
          <img src="{{asset('img/slider.png')}}" alt="Image" class="image-main">
        </div>
      </div>
      <div class="content-middle">
        <div class="content-head__container">
          <div class="content-head__title-wrap">
            <div class="content-head__title-wrap__title bcg-title">{{$title}}</div>
          </div>
          <div class="content-head__search-block">
            <div class="search-container">
              <form class="search-container__form">
                {{csrf_field()}}
                <input type="text" class="search-container__form__input">
                <button class="search-container__form__btn">search</button>
              </form>
            </div>
          </div>
        </div>
        @yield('content')
      </div>

      <div class="content-bottom">
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="footer__footer-content">
      <div class="random-product-container">
        <div class="random-product-container__head">Случайный товар</div>
        <div class="random-product-container__content">
          <div class="item-product">
            <div class="item-product__title-product">
              <a href="/product/{{$rand_product->id}}" class="item-product__title-product__link">{{$rand_product->name}}</a>
            </div>
            <div class="item-product__thumbnail">
              <a href="/product/{{$rand_product->id}}" class="item-product__thumbnail__link">
                <img src="/{{$rand_product->photo}}" alt="Preview-image" class="item-product__thumbnail__link__img">
              </a>
            </div>
            <div class="item-product__description">
              <div class="item-product__description__products-price">
                <span class="products-price">{{$rand_product->price}}</span> руб.
              </div>
              <div class="item-product__description__btn-block">
                <a href="/product/{{$rand_product->id}}" class="btn btn-blue">Купить</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__footer-content__main-content">
        <p>
          Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
          онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
          У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
          и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
          коды продления и многое друго. Также здесь всегда можно узнать последние новости
          из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
          актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
          что немаловажно, выгодно!
        </p>
      </div>
    </div>
    <div class="footer__social-block">
      <ul class="social-block__list bcg-social">
        <li class="social-block__list__item">
          <a href="#" class="social-block__list__item__link">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="social-block__list__item">
          <a href="#" class="social-block__list__item__link">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="social-block__list__item">
          <a href="#" class="social-block__list__item__link">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>