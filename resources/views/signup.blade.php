@extends('layout.maket')

@section('title-block') Create account @endsection

@section('content')
  <h2>Create account</h2>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('signup-form') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Придумайте логин</label>
      <input type="text" name="name" placeholder="login" id="name" class="form-control">
    </div>

    <form action="/signup/submit" method="post">
      <div class="form-group">
        <label for="name">Введите email</label>
        <input type="text" name="email" placeholder="email" id="email" class="form-control">
      </div>

    <div class="form-group">
      <label for="name">Придумайте пароль</label>
      <input type="password" name="password" placeholder="password" id="password" class="form-control">
    </div>

    <div class="form-group">
      <label for="name">Подтвердите пароль</label>
      <input type="password" name="password" placeholder="password" id="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
  </form>
@endsection
