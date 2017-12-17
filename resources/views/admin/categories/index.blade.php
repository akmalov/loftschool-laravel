@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="nav-list__item__link">Категории</div>
    <div><a href="/admin/categories/create" class="btn btn-primary">Создать</a></div>
    <table>
      @foreach($categories as $category)
        <tr>
          <td>
            <a class="sidebar-category__item__link"
               href="/admin/categories/show/{{$category->id}}">{{$category->name}}</a>
          </td>
          <td>
            <a style="color: green;" class="sidebar-category__item__link"
               href="/admin/categories/edit/{{$category->id}}">Редактировать</a>
          </td>
          <td>
            <form action="/admin/categories/destroy/{{$category->id}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <input style="color: red;" type="submit" value="Удалить">
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection