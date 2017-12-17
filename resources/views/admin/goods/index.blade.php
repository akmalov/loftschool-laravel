@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="nav-list__item__link">Товары</div>
          <div><a href="/admin/goods/create" class="btn btn-primary">Создать</a></div>
          <div class="panel-body">
            <table>
              @foreach($goods as $good)
                <tr>
                  <td>
                    <a class="sidebar-category__item__link" href="/admin/goods/show/{{$good->id}}">{{$good->name}}</a>
                  </td>
                  <td>
                    <a style="color: green;" class="sidebar-category__item__link" href="/admin/goods/edit/{{$good->id}}">Редактировать</a>
                  </td>
                  <td>
                    <form action="/admin/goods/destroy/{{$good->id}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <input style="color: red;" type="submit" value="Удалить">
                    </form>
                  </td>
                </tr>
              @endforeach
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection