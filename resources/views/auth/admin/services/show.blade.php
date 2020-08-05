@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
  <main class="game-show">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h2>{{ $service->name }}</h2>
        </div>
        <div class="card-body">
          <table>

            <tr>
              <th>Поле</th>
              <th>Значение</th>
            </tr>

            <tr>
              <td>ID</td>
              <td>{{ $service->id }}</td>
            </tr>

            <tr>
              <td>CODE</td>
              <td>{{ $service->code }}</td>
            </tr>

            <tr>
              <td>Описание игры</td>
              <td>{{ $service->price }}</td>
            </tr>

            <tr>
              <td>Картинка</td>
            </tr>

          </table>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
@endsection
