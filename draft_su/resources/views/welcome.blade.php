<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="assets/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMIN CARGO CONTROL</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <a>CAMIN CARGO CONTROL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">

      </li>
    </ul>
    <div class="nav-item login-register">
        @if (Route::has('login'))
            <div class="">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-outline-light">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light">Iniciar Sesión</a>
                @endauth
            </div>
        @endif
    </div>
</nav>


<style>
    body {
    background-image: url("{{ asset('img/vessel.png') }}");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.navbar {
    background-color: black;
    color: white;
    height: 80px;
    padding: 20px 0;
    font-family: "AR One Sans", sans-serif; /* Cambia la fuente a "AR One Sans" y usa una fuente sans-serif como alternativa */
}

.navbar h1 {
    font-size: 24px;
    letter-spacing: 2px;
}

.nav-item {
    margin-right: 20px;
}

.nav-item a.nav-link {
    font-size: 18px;
    color: white;
    letter-spacing: 2px;
}

.nav-item a.nav-link:hover {
    color: #003366;
}

.nav-item.active a.nav-link {
    font-weight: bold;
}

.nav-item.login-register a {
    color: white;
}

.nav-item.login-register a:hover {
    color: #003366;
}
</style>
</body>
</html>

