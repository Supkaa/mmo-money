@extends('layouts.master')

@section('css')
  <link rel="stylesheet" href="/css/personal-account.css">
@endsection
@section('content')
  <main id="profile">
    <div class="container-fluid">
      <div class="card user-profile">
        <div class="row">
          <div class="col-md-2">
            <div class="card profile" style="width: 18rem;">
              <img src="{{ Storage::url(Auth::user()->image) }}" class="card-img-top" alt="...">
              <div class="card-body profile-edit-button">
                <h5>{{ Auth::user()->name }}</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><button onclick="viewEdit()" class="btn btn-outline-grey login" ">Редактировать</button> </li>
                          <li class=" list-group-item"><button id="info-button" onclick="viewInfo()"
                      class="btn btn-outline-grey button-group-item login">Информация о себе</button></li>
                <li class=" list-group-item"><button onclick="viewMoney()"
                    class="btn btn-outline-grey button-group-item login">Финансы</button></li>
                <li class="list-group-item"><button onclick="viewPurchases()"
                    class="btn btn-outline-grey button-group-item login">Покупки</button></li>
              </ul>
            </div>
          </div>

          <div class="col-md-10">
            <div class="card profile-info">
              <h5 class="card-header">Информация</h5>
              <div class="card-body">

                <div id="money" class="card profile-info-element">
                  <h5 class="card-header">Финансы</h5>
                  <div class="card-body">
                    <p class="card-text">{{ Auth::user()->money }}</p>
                  </div>
                </div>

                <div id="purchases" class="card profile-info-element">
                  <h5 class="card-header">Покупки</h5>
                  <div class="card-body">
                    <p class="card-text">Баланс: 123123</p>
                  </div>
                </div>

                <div id="info" class="card profile-info-element">
                  <h5 class="card-header">Информация о себе</h5>
                  <div class="card-body">

                    <div class="row">
                      <div class="col-1">
                        <label for="email">Email address</label>
                      </div>
                      <div class="col-11">
                        <input type="email" name="email" id="email" class="form-control" readonly
                          placeholder="Email address" value="{{ Auth::user()->email }}" required>
                      </div>


                    </div>
                  </div>
                </div>


                <div id="edit" class="card profile-info-element">
                  <h5 class="card-header">Редактирование</h5>
                  <div class="card-body">
                    <form class="form-signin" enctype="multipart/form-data" method="post" action="{{ route('user-edit') }}" aria-label="Edit">
                      @csrf
                      <div class="form-group">
                        <label class="btn btn-outline-succsess btn-file">
                          Загрузить картинку <input type="file" style="display: none" name="image" id="image">
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="name" class="sr-only">login</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="login"
                          value="{{ Auth::user()->name }}" required autofocus>
                      </div>


                      <div class="form-group">
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" readonly
                          placeholder="Email address" value="{{ Auth::user()->email }}" required>
                      </div>

                      <div class="form-group">
                        <label for="old-password" class="sr-only">Old password</label>
                        <input type="password" name="oldPassword" id="old-password" class="form-control"
                          placeholder="Old password" required>
                      </div>

                      <div class="form-group">
                        <label for="new-password" class="sr-only">New Password</label>
                        <input type="password" name="newPassword" id="new-password" class="form-control"
                          placeholder="New Password">
                      </div>

                      <button class="btn" type="submit">Отправить</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
  </main>
@endsection


@section('js')
  <script>
    function viewMoney() {
      document.getElementById('purchases').style.display = 'none';
      document.getElementById('edit').style.display = 'none';
      document.getElementById('info').style.display = 'none';
      document.getElementById('money').style.display = 'flex';
    }

    function viewPurchases() {
      document.getElementById('money').style.display = 'none';
      document.getElementById('edit').style.display = 'none';
      document.getElementById('info').style.display = 'none';
      document.getElementById('purchases').style.display = 'flex';
    }

    function viewEdit() {
      document.getElementById('money').style.display = 'none';
      document.getElementById('purchases').style.display = 'none';
      document.getElementById('info').style.display = 'none';
      document.getElementById('edit').style.display = 'flex';
    }

    function viewInfo() {
      document.getElementById('money').style.display = 'none';
      document.getElementById('purchases').style.display = 'none';
      document.getElementById('edit').style.display = 'none';
      document.getElementById('info').style.display = 'flex';
    }

    function calc() {
      let summ = 0;
      let price = parseInt(document.getElementById('price').value);
      let gold = parseInt(document.getElementById('gold').value);
      summ = price * gold;
      document.getElementById('total-price').innerHTML = summ;
    }

  </script>
@endsection
