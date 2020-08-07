@extends('layouts.master')

@section('title', 'Админ: Сервера')

@section('css')
  <link rel="stylesheet" href="/css/admin.css">
@endsection
@section('content')
  <main id="games">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h5>Все сервера</h5>
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
              @foreach ($serviceServers as $serviceServer)
                <tr>
                  <td>{{ $serviceServer->name }}</td>
                  <td>
                    <form action="{{ route('serviceServers.destroy', $serviceServer) }}" method="POST">
                      <a class="btn btn-outline-submit"
                        href="{{ route('serviceServers.show', $serviceServer) }}">Открыть</a>
                      <a class="btn btn-outline-submit"
                        href="{{ route('serviceServers.edit', $serviceServer) }}">Редактировать</a>
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-outline-submit" type="submit" value="Удалить">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <a class="btn btn-outline-grey login" href="{{ route('serviceServers.create') }}">Добавить сервер</a>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
@endsection
