@extends('layouts.master')

@isset($serviceServer)

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

          @isset($serviceServer)
            <h2>Редактировать {{ $serviceServer->name }}</h2>
          @else
            <h2>Добавить новую игру</h2>
          @endisset

        </div>
        <div class="card-body">
          <form method="POST" action="
            @isset($serviceServer)
              {{ route('serviceServers.update', $serviceServer) }}
            @else
              {{ route('serviceServers.store') }}
            @endisset           
            ">
            @isset($serviceServer)
              @method('PUT')
            @endisset
            @csrf

            <div class="form-group">

              @isset($serviceServer)
                <label for="name" class="sr-only">name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Название игры"
                  value="{{ $serviceServer->name }}" required autofocus>
              @else
                <label for="name" class="sr-only">name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Название игры" value="" required
                  autofocus>
              @endisset

            </div>

            <div class="form-group">

            <div class="form-group">

              <label for="service_id" class="sr-only">name</label>
              <select name="service_id" id="game_id"">


                @foreach ($services as $service)
                  @isset($serviceServer)
                  <option value="{{ $service->id }}">{{ $service->name }}</option>                               
                  @endisset 
                  <option value="{{ $service->id }}">{{ $service->name }}</option>                               
                @endforeach
              </select>
              


            </div>

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
