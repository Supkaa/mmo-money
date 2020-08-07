@extends('auth.layouts.master')


@section('title', 'LOGIN')

@section('content')

  <form class="form-signin" method="post" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
      <label for="email" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="required">
    </div>

    <div class="form-group">
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password"  class="form-control" placeholder="Password"
        required="required">
    </div>

    <button class="btn" type="submit">Войти</button>
  </form>
  </div>
  <ul class="help-links">
    <li>
      <a href="{{ route('register') }}">Зарегистрируйтесь, если вы здесь впервые!</a>
    </li>
  </ul>
@endsection
