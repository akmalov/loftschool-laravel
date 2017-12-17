@extends('layouts.app')

@section('content')
  <div class="content-main__container">
    <div class="cart-product-list">
      @foreach($orders as $order)
        <div class="cart-product-list__item">
          <div class="cart-product__item__product-photo"><img src="/{{$order->good->photo}}" class="cart-product__item__product-photo__image"></div>
          <div class="cart-product__item__product-name">
            <div class="cart-product__item__product-name__content"><a href="/product/{{$order->good->id}}">{{$order->good->name}}</a></div>
          </div>
          <div class="cart-product__item__cart-date">
            <div class="cart-product__item__cart-date__content">{{(new \DateTime($order->created_at))->format('H:i')}}</div>
          </div>
          <div class="cart-product__item__cart-date">
            <div class="cart-product__item__cart-date__content">{{(new \DateTime($order->created_at))->format('d.m.Y')}}</div>
          </div>
          <div class="cart-product__item__product-price"><span class="product-price__value">{{$order->price}} руб</span></div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="content-footer__container">
    {{ $orders->links('layouts.pagination') }}
  </div>
@endsection