@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="nav-list__item__link">Редактировать товар</div>
    @foreach($errors->all() as $err)
      <li>{{$err}}</li>
    @endforeach
    <form action="/admin/goods/update/{{$good->id}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <label for="photo" class="input-group">
        Фото:
        <br>
        <img src="/{{$good->photo}}" style="max-width: 200px;max-height: 200px;"/>
        <br>
        <input type="file" name="photo">
      </label>
      <br><br>
      <label for="name" class="input-group">
        Название:
        <br>
        <input type="text" name="name" value="{{$good->name}}">
      </label>
      <br><br>
      <label for="name" class="input-group">
        Категория:
        <br>
        <select name="category">
          @foreach($categories as $category)
            <option value="{{$category->id}}" @if ($category->id==$good->category_id) selected @endif>{{$category->name}}</option>
          @endforeach
        </select>
      </label>
      <br><br>
      <label for="price" class="input-group">
        Цена:
        <br>
        <input type="text" name="price" value="{{$good->price}}">
      </label>
      <br><br>
      <label for="description" class="input-group">
        Описание:
        <br>
        <textarea name="description" cols="30" rows="10">{{$good->description}}</textarea>
      </label>
      <br>
      <input type="submit" class="btn" value="Сохранить">
    </form>
    <br>
    <a href="/admin/categories" class="btn">Вернуться к списку</a>
  </div>
@endsection