<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    <div class="container">
    <div class="row">
      <div class="col-10 container-navbar">
        <nav class="nav">
          <div class="col-6 navbar-logo">
            <img src="../assets/img/Logo 5_PNG.png" alt="Logo" width="100%" height="auto">
          </div>
          <div class="col-6 navbar-navigation d-flex justify-content-end align-items-center">
            <li class="{{ '/' == request()->path() ? 'active' : '' }}">
              <a href="{{ url('/') }}" class="btn">Home</a>
            </li>
            <li class="{{ '/login' == request()->path() ? 'active' : '' }}">
              <a href="{{ url('/login') }}" class="btn">Login</a>
            </li>
            <li class="">
              <a href="#" class="btn">Changelog</a>
            </li>
          </div>
        </nav>
        @yield('content')
      </div>
        <div class="col-2 stripe">
        <img src="../assets/img/home2.png" alt="" width="auto" height="40%">
      </div>
    </div>

    <div class="footer d-flex justify-content-center fixed-bottom">
      <p>© 2022 KOMISI PEMILIHAN UMUM</p>
    </div>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>