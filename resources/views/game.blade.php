@extends('layouts.master')
@section('title', $game->name)

@section('css')

@endsection

@section('content')
  <section class="game-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h1 class="text-center">{{ $game->name }}</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="grid-service">
    <div class="container">
      @foreach ($game->services as $service)
        <div class="card">
          <button class="card-header text-left btn btn-block" type="button" data-toggle="collapse"
            data-target="#{{ $service->name }}" aria-expanded="false" aria-controls="collapseExample">
            <div class="row">
              <div class="col">
                <h6>
                  {{ $service->name }}
                </h6>
              </div>
            </div>
          </button>

          <div class="collapse" id="{{ $service->name }}">
            <div class="card-body">
              <form method="POST" action="{{ route('basket-confirm', $service) }}">
                @csrf

                <div class="form-group text-center">
                  <div class="row">
                    <div class="col">
                      <h2>Калькулятор золота </h2>
                    </div>
                  </div>
                </div>
                @auth
                <div class="form-group">
                  <label for="email" class="sr-only">nickname</label>
                  <input type="hidden" name="email" id="email" class="form-control" 
                         value="{{ Auth::user()->email }}" required>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-2">
                      <label for="server">Выберите сервер:</label>
                    </div>
                    <div class="col-10">
                      <select name="server" id="server">
                        @foreach ($service->servers as $server)
                          <option>{{ $server->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                @endauth
                <div class="form-group">
                  <label for="nickmane" class="sr-only">nickname</label>
                  <input type="text" name="nickname" id="nickname" class="form-control"
                    placeholder="Введите имя персонажа" required>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-1">
                      <label for="price">Цена за 1 золотую:</label>
                    </div>
                    <div class="col-3">
                      <input type="number" name="price" id="price" class="form-control price" readonly
                        value="{{ $service->price }}">
                    </div>

                    <div class="col-4">
                      <input type="number" name="count" id="count" class="form-control count"
                        placeholder="Количество золота" min="0" step="1">
                    </div>

                    <div class="col-1">
                      <label for="total-price">Сумма:</label>
                    </div>
                    <div class="col-3">
                      <input type="number" name="total_price" id="total-price" class="form-control total-price" readonly>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <button class="btn" type="submit">Перейти к оформлению заказа</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection

@section('js')

@endsection
