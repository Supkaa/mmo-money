@extends('layouts.master')

@isset($service)

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

          @isset($service)
            <h2>Редактировать {{ $service->name }}</h2>
          @else
            <h2>Добавить новую услугу</h2>
          @endisset

        </div>
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data" action="
            @isset($service)
              {{ route('services.update', $service) }}
            @else
              {{ route('services.store') }}
            @endisset
            ">
            @isset($service)
              @method('PUT')
            @endisset
            @csrf

            <div class="form-group">
              @isset($service)
                <label for="code" class="sr-only">code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="code"
                  value="{{ $service->code }}" required>
              @else
                <label for="code" class="sr-only">code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="code" value="" required>
              @endisset


            </div>

            <div class="form-group">
              @isset($service)
                <label for="name" class="sr-only">name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Название услуги"
                  value="{{ $service->name }}" required autofocus>
              @else
                <label for="name" class="sr-only">name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Название услуги" value=""
                  required autofocus>
              @endisset
            </div>
            <div class="form-group">

                <label for="game_id" class="sr-only">name</label>
                <select name="game_id" id="game_id"">


                  @foreach ($games as $game)
                      <option value="{{ $game->id }}"                      
                        @isset($service)
                          @if ($service -> game_id == $game->id)
                              selected
                          @endif
                      @endisset
                      >{{ $game->name }}</option>

                  @endforeach
                </select>
              


            </div>
            <div class="form-group">
              @isset($service)
                <label for="price" class="sr-only">description</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Цена" value="{{ $service->price }}"
                  required></input>
              @else
                <label for="number" class="sr-only">description</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Цена"
                  required></input>
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
