@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="nav-list__item__link">Заказы</div>
    <br>
    <table>
      <tr style="font-weight: 600">
        <td width="20%">Название товара</td>
        <td width="10%">id</td>
        <td width="20%">Имя</td>
        <td width="20%">email</td>
        <td width="10%">Цена</td>
        <td width="20%">Дата и время записи</td>
      </tr>
      @foreach($orders as $order)
        <tr>
          <td width="20%">{{$order->good->name}}</td>
          <td width="10%">{{$order->user_id}}</td>
          <td width="20%">{{$order->user_name}}</td>
          <td width="20%">{{$order->email}}</td>
          <td width="10%">{{$order->price}} руб</td>
          <td width="20%">{{$order->created_at}}</td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection