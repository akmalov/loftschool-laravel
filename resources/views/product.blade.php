@extends('layouts.app')

@section('title', 'ГеймсМаркет - Главная страница')

@section('content')

  <div class="content-head__container">
    <div class="content-head__title-wrap">
      <div class="content-head__title-wrap__title bcg-title">The Witcher 3: Wild Hunt в разделе action</div>
    </div>
    <div class="content-head__search-block">
      <div class="search-container">
        <form class="search-container__form">
          <input type="text" class="search-container__form__input">
          <button class="search-container__form__btn">search</button>
        </form>
      </div>
    </div>
  </div>
  <div class="content-main__container">
    <div class="product-container">
      <div class="product-container__image-wrap"><img src="img/cover/game-1.jpg" class="image-wrap__image-product">
      </div>
      <div class="product-container__content-text">
        <div class="product-container__content-text__title">SuperMario</div>
        <div class="product-container__content-text__price">
          <div class="product-container__content-text__price__value">
            Цена: <b>400</b>
            руб
          </div>
          <a href="#" class="btn btn-blue">Купить</a>
        </div>
        <div class="product-container__content-text__description">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum. Sed ut perspiciatis
            unde omnis iste natus error sit voluptatem
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
          </p>
        </div>
      </div>
    </div>
  </div>

@endsection