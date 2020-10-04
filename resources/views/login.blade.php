@extends('layout.maket')

@section('title-block') Login @endsection

@section('content')
  <h2>Sign in to Mysite</h2>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('login-form') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Введите логин или email</label>
      <input type="text" name="name" placeholder="login or email" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="name">Введите пароль</label>
      <input type="password" name="password" placeholder="password" id="password" class="form-control">
    </div>

      <button type="submit" class="btn btn-success">Отправить</button>
  </form>
@endsection
