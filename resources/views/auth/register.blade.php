@extends('auth.layouts.master')


@section('title')

@section('content')
  <form class="form-signin" method="post" action="{{ route('register') }}" aria-label="Register">
    @csrf
    <div class="form-group">
      <label for="name" class="sr-only">login</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="login" required autofocus>
    </div>


    <div class="form-group">
      <label for="email" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
    </div>

    <div class="form-group">
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
    </div>

    <div class="form-group">
      <label for="password-confirm" class="sr-only">Password Confirm</label>
      <input type="password" name="password_confirmation" id="password-confirm" class="form-control"
        placeholder="Password" required>
    </div>

    <button class="btn" type="submit">Отправить</button>
  </form>
  </div>
  <ul class="help-links">
    <li>
      <a href="{{ route('login') }}">Я уже зарегистрирован!</a>
    </li>
  </ul>
@endsection
