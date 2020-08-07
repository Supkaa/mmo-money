@extends('layouts.master')

@section('title', 'Админ: Игры')

@section('css')
  <link rel="stylesheet" href="/css/admin.css">
@endsection
@section('content')
  <main id="games">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h5>Все игры</h5>
        </div>

        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Название</th>
                <th scope="col">Действия</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($games as $game)
                <tr>
                  <td>{{ $game->name }}</td>
                  <td>
                    <form action="{{ route('games.destroy', $game) }}" method="POST">
                      <a class="btn btn-outline-submit" href="{{ route('games.show', $game) }}">Открыть</a>
                      <a class="btn btn-outline-submit" href="{{ route('games.edit', $game) }}">Редактировать</a>
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-outline-submit" type="submit" value="Удалить">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <a class="btn btn-outline-grey login" href="{{ route('games.create') }}">Добавить игру</a>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
@endsection
