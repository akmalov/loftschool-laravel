@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="nav-list__item__link">Создать товар</div>
    @foreach($errors->all() as $err)
      <li>{{$err}}</li>
    @endforeach
    <form action="/admin/goods/store" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <label for="photo" class="input-group">
        Фото:
        <br>
        <input type="file" name="photo">
      </label>
      <br><br>
      <label for="name" class="input-group">
        Название:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
      </label>
      <br><br>
      <label for="name" class="input-group">
        Категория:
        <br>
        <select name="category">
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </label>
      <br><br>
      <label for="price" class="input-group">
        Цена:
        <br>
        <input type="text" name="price" value="{{old('price')}}">
      </label>
      <br><br>
      <label for="description" class="input-group">
        Описание:
        <br>
        <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea>
      </label>
      <br><br>
      <input type="submit" class="btn" value="Сохранить">
    </form>
    <br><br>
    <a href="/admin/categories" class="btn">Вернуться к списку</a>
@endsection