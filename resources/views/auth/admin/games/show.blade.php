@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
  <main class="game-show">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h2>{{ $game->name }}</h2>
        </div>
        <div class="card-body">
          <table>

            <tr>
              <th>Поле</th>
              <th>Значение</th>
            </tr>

            <tr>
              <td>ID</td>
              <td>{{ $game->id }}</td>
            </tr>

            <tr>
              <td>CODE</td>
              <td>{{ $game->code }}</td>
            </tr>

            <tr>
              <td>Описание игры</td>
              <td>{{ $game->description }}</td>
            </tr>

            <tr>
              <td>Картинка</td>
              <td>{{ Storage::url($game->image) }}</td>
            </tr>

          </table>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
@endsection
