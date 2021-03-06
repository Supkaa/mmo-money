@extends('layouts.master')

@section('title', 'Заказы')

@section('css')
  <link rel="stylesheet" href="/css/admin.css">
@endsection
@section('content')
  <main id="orders">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h5>Оформленные заказы</h5>
        </div>

        <div class="card-body">
          <h6>Действующие заказы</h6>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Email заказчика</th>
                <th scope="col">Имя персонажа</th>
                <th scope="col">Название игры</th>
                <th scope="col">Название сервера</th>
                <th scope="col">Когда отправлен</th>
                <th scope="col">Количество внутриигровой валюты</th>
                <th scope="col">Сумма</th>
                <th scope="col">Подтверждение заказа</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
              @if ($order->status == 1)
                <tr>
                  <form method="post" action={{route("admin-confirm",$order)}}>
                    @csrf
                    <input name="id" type="hidden" readonly value="{{ $order->id }}">
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->nickname }}</td>
                    <td>{{ $order->game }}</td>
                    <td>{{ $order->server }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->gold }}</td>
                    <td>{{ $order->count }}</td>
                    <td><button style="btn btn-outline-grey" type="submit" >Success</button></td>
                  </form>
                </tr> 
              @endif
              @endforeach
            </tbody>
          </table>
          <h6>Банк заказов</h6>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Email заказчика</th>
                <th scope="col">Имя персонажа</th>
                <th scope="col">Название игры</th>
                <th scope="col">Название сервера</th>
                <th scope="col">Когда отправлен</th>
                <th scope="col">Количество внутриигровой валюты</th>
                <th scope="col">Сумма</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
              @if ($order->status == 0)
                <tr>
                  <form method="post" action={{route("admin-confirm",$order)}}>
                    @csrf
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->nickname }}</td>
                    <td>{{ $order->game }}</td>
                    <td>{{ $order->server }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->gold }}</td>
                    <td>{{ $order->count }}</td>
                  </form>
                </tr> 
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
@endsection
