@extends('layouts.app')

@section('content')
  <div class="content-main__container">
    <div class="product-container">
      <div class="product-container__image-wrap">
        <img src="/{{$product->photo}}" class="image-wrap__image-product">
      </div>
      <div class="product-container__content-text">
        <div class="product-container__content-text__title">{{$product->name}}</div>
        <div class="product-container__content-text__price">
          <div class="product-container__content-text__price__value">
            Цена: <b>{{$product->price}}</b>
            руб
          </div>
          <a href="" id="btn-buy" class="btn btn-blue">Купить</a>
        </div>
        @if($product->description)
          <div class="product-container__content-text__description">
            {{$product->description}}
          </div>
        @endif
      </div>
    </div>
  </div>
  <div class="popup" id="popup">
    <div class="close">X</div>
    <div class="top"><h2>Оформить заказ на {{$product->name}}</h2></div>
    <div class="bottom">
      <form id="order-form">
        {{csrf_field()}}
        <input type="hidden" name="good_id" value="{{$product->id}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <input type="text" name="name" placeholder="Введите имя">
        <input type="text" name="email" placeholder="Введите email"
               value="@if (Auth::check()){{ Auth::user()->email }}@endif">
        <input type="submit" class="btn btn-blue" value="Заказать">
        <div id="notification"></div>
      </form>
    </div>
  </div>

@endsection