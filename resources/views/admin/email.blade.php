@extends('admin.layouts.admin')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="nav-list__item__link">Настройки</div>
          <br>
          <div class="panel-body">
            Адрес для получения уведомлений
            <br><br>
            <form action="/admin/email/store" method="post">
              {{csrf_field()}}
              @foreach($settings as $setting)
                <input type="text" name="email" value="{{$setting->email}}">
              @endforeach
              <br>
              <br>
              <input type="submit" class="btn" value="Сохранить">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection