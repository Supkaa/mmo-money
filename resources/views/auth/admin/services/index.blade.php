@extends('layouts.master')

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
              @foreach ($services as $service)
                <tr>
                  <td>{{ $service->name }}</td>
                  <td>
                    <form action="{{ route('services.destroy', $service) }}" method="POST">
                      <a class="btn btn-outline-submit" href="{{ route('services.show', $service) }}">Открыть</a>
                      <a class="btn btn-outline-submit" href="{{ route('services.edit', $service) }}">Редактировать</a>
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-outline-submit" type="submit" value="Удалить">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <a class="btn btn-outline-grey login" href="{{ route('services.create') }}">Добавить услугу</a>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
@endsection
