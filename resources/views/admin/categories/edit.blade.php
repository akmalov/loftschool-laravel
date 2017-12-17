@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="nav-list__item__link">Редактировать категорию</div>
    <br>
    @foreach($errors->all() as $err)
      <li>{{$err}}</li>
    @endforeach
    <form action="/admin/categories/update/{{$category->id}}" method="post">
      {{csrf_field()}}
      <label style="display: block" for="name" class="input-group">
        Название:
        <br>
        <input type="text" name="name" value="{{$category->name}}">
        <br><br>
      </label>
      <label style="display: block" for="description" class="input-group">
        Описание:
        <br>
        <textarea name="description" cols="30" rows="10">{{$category->description}}</textarea>
      </label>
      <br>
      <input type="submit" class="btn" value="Сохранить">
    </form>
    <br>
    <a href="/admin/categories" class="btn">Вернуться к списку</a>
  </div>
@endsection