@extends('layouts.master')

@isset($game)

@else

@endisset

@section('css')
  <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
  <main class="add-games-form">
    <div class="container">
      <div class="card">
        <div class="card-header">

          @isset($game)
            <h2>Редактировать {{ $game->name }}</h2>
          @else
            <h2>Добавить новую игру</h2>
          @endisset

        </div>
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data" action="
                @isset($game)
                        {{ route('games.update', $game) }}
                @else
                        {{ route('games.store') }}
                @endisset
                
                ">
            @isset($game)
              @method('PUT')
            @endisset
            @csrf

            <div class="form-group">
              <div class="row">
                <div class="col">
                  @isset($game)
                    <label class="btn btn-outline-succsess btn-file">
                      Поменять картинку <input type="file" style="display: none" name="image" id="image">
                    </label>
                  @else
                    <label class="btn btn-outline-succsess btn-file">
                      Загрузить картинку <input type="file" style="display: none" name="image" id="image">
                    </label>
                  @endisset


                </div>
              </div>


            </div>

            <div class="form-group">

              @isset($game)
                <label for="code" class="sr-only">code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="code" value="{{ $game->code }}"
                  required>
              @else
                <label for="code" class="sr-only">code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="code" value="" required>
              @endisset


            </div>

            <div class="form-group">

              @isset($game)
                <label for="name" class="sr-only">name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Название игры"
                  value="{{ $game->name }}" required autofocus>
              @else
                <label for="name" class="sr-only">name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Название игры" value="" required
                  autofocus>
              @endisset


            </div>

            <div class="form-group">

              @isset($game)
                <label for="description" class="sr-only">description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Описание"
                  required>{{ $game->description }}</textarea>
              @else
                <label for="description" class="sr-only">description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Описание"
                  required></textarea>
              @endisset


            </div>
            <button class="btn btn-outline-grey">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
@endsection
