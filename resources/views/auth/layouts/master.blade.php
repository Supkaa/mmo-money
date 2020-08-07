<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/img/favicons/favicon.ico">

  <title>@yield('title')</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/mdb.min.css">

  <link rel="stylesheet" href="/css/style.css">

  <link rel="stylesheet" href="/css/signin.css">
</head>

<body>
  <div class="modal-dialog text-center">
    <div class="col-9 main-section">
      <div class="modal-content" style="width: 500px">

        <div class="user-img">
          <img src="/img/face.png" alt="">
        </div>

        <div class="col-12 form-input">
          <h1 class="h3 mb-3 font-weight-normal">@yield('title')</h1>


          @yield('content')
        </div>
      </div>
    </div>




    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>
