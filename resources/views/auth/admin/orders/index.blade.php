@extends('layouts.master')

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
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Email заказчика</th>
                <th scope="col">Имя персонажа</th>
                <th scope="col">Название сервера</th>
                <th scope="col">Когда отправлен</th>
                <th scope="col">Сумма</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->email }}</td>
                  <td>{{ $order->nickname }}</td>
                  <td>{{ $order->server }}</td>
                  <td>{{ $order->created_at }}</td>
                  <td></td>
                </tr>
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
