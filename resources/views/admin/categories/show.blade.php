@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="nav-list__item__link">Категория</div>
    <table>
      <tr>
        <td class="sidebar-category__item__link">Название</td>
        <td>{{$category->name}}</td>
      </tr>
      <tr>
        <td class="sidebar-category__item__link">Описание</td>
        <td>{{$category->description}}</td>
      </tr>
      <tr>
        <td class="sidebar-category__item__link">Товары</td>
        @if($category->goods)
          <td>
            @foreach($category->goods as $good)
              <a href="/admin/goods/show/{{$good->id}}">{{$good->name}}</a>,
            @endforeach
          </td>
        @endif
      </tr>
    </table>
  </div>
@endsection