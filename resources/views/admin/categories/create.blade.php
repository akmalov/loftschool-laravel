@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    <div class="nav-list__item__link">Создать категорию</div>
    <br>
    <form action="/admin/categories/store" method="post">
      {{csrf_field()}}
      <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="input-group">Название:</label>
        <br>
        <input type="text" name="name">
        <br><br>
        @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
      </div>
      <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="description" class="input-group">Описание:</label>
        <br>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br><br>
        @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
        @endif
      </div>
      <input type="submit" class="btn" value="Сохранить">
    </form>
    <br>
    <a href="/admin/categories" class="btn">Вернуться к списку</a>
  </div>
@endsection