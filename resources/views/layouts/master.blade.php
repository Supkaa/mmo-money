<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fot=no">
  <!-- Подключаем шрифт и иконки-->
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Playfair+Display&family=Ubuntu&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
  <!-- Подключаем общие стили-->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/mdb.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/nav.css">
  <link rel="stylesheet" href="/css/footer.css">
  <!-- Подключаем уникальный стиль-->
  @yield('css')
  <title>@yield('title')</title>
</head>

<body>
  <!--Тут есть контент страницы-->
  <header id="nav">
    <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar ">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}"><i class="fas fa-gamepad"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">


            @auth
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('index') }}">Главная</a>
              </li>
              @if (Auth::user()->isAdmin())
                <li class="nav-item">
                  <a id="account" class="nav-link" href="{{ route('orders') }}">Заказы</a>
                </li>
                <li class="nav-item">
                  <a id="account" class="nav-link" href="{{ route('games.index') }}">Все игры</a>
                </li>
                <li class="nav-item">
                  <a id="account" class="nav-link" href="{{ route('services.index') }}">Все услуги</a>
                </li>
                <li class="nav-item">
                  <a id="account" class="nav-link" href="{{ route('serviceServers.index') }}">Все серверы</a>
                </li>
                <li class="nav-item">
                  <a id="account" class="nav-link" href="{{ route('account') }}">Личный кабинет</a>
                </li>                
              @else
                <li class="nav-item">
                  <a id="account" class="nav-link" href="{{ route('account') }}">Личный кабинет</a>
                </li>
              @endif
              <li class="nav-item">
                <a class="btn btn-outline-grey login" href="{{ route('get-logout') }}">Выйти</a>
              </li>
            @endauth
            @guest
              <li class="nav-item">
                <a class="btn btn-outline-grey login" href="{{ route('login') }}">Войти</a>
              </li>
            @endguest

          </ul>
        </div>
      </div>
    </nav>
  </header>



  @yield('content')



  <footer id="footer" class="footer mt-auto py-3">
    <div class="container-fluid">
      <div class="d-flex justify-content-between">
        <div class="footer-left">
          <span><i class="fa fa-copyright" aria-hidden="true"></i> Created by Supkaa&ShedarStarDust</span>
        </div>

        <div class="footer-right">
          <a href="#"><i class="fab fa-vk"></i></i></a>
        </div>
      </div>
    </div>
  </footer>



  <!-- Подключаем общие скрипты-->
  <script src="/js/jquery-3.5.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/mdb.min.js"></script>
  <script src="/js/main.js"></script>


  <!-- Подключаем уникальный скрипт-->
  @yield('js')
</body>

</html>
</body>

</html>
