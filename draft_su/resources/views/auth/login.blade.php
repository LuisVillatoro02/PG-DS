<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

        <div class="container">
            <form action="{{route('login')}}" method="post">
                @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger p-0">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
              <center><img src="{{ asset('img/logo.png') }}" alt="Logo de la página" width="100"></center>
              <h1>Draft Survey App</h1>
              <center><p>"Measure, Verify and Sail."</p></center>
              <div class="form-group">
                <label for="username">Mail</label>
                <input type="mail" id="username" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <div class="password-field">
                  <input type="password" id="password" name="password" placeholder="" required>
                </div>
              </div>
              <button type="submit">Login</button>

              <div class="enlace-olvidaste">
                </div>
            </form>
          </div>
        </div>
    </div>
</body>
</html>

<style>
    /* Estilos generales */

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/fondo.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0;
    padding: 0;
    color: #fff;
  }

  /* Estilos del contenedor */

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  /* Estilos del formulario */

  form {
    background-color: #0054a3;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
  }

  h1 {
    font-size: 36px;
    margin: 0 0 20px 0;
    text-align: center;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    font-size: 18px;
    display: block;
    margin-bottom: 5px;
  }

  input {
    padding: 10px;
    border-radius: 5px;
    border: none;
    width: 100%;
    box-sizing: border-box;
  }

  button[type="submit"] {
    background-color: #0088cc;
    color:  #ffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
  }

  button[type="submit"]:hover {
    background-color: #a1cce8;
  }

  /* Estilos de los mensajes de error */

  .error-message {
    color: #ff0000;
    margin-top: 5px;
  }

  .toggle-button {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ffffff;
    border: none;
    border-radius: 50px;
    padding: 8px 16px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    position: relative;
    overflow: hidden;
    cursor: pointer;
  }

  .toggle-text {
    position: absolute;
    left: 20px;
  }

  .toggle-switch {
    position: absolute;
    right: 20px;
    width: 40px;
    height: 24px;
    background-color: #eeeeee;
    border-radius: 24px;
    transition: background-color 0.3s;
  }

  .toggle-switch::before {
    content: "";
    position: absolute;
    left: 2px;
    top: 2px;
    width: 20px;
    height: 20px;
    background-color: #ffffff;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s;
  }

  .toggle-button.active .toggle-text {
    left: 55px;
  }

  .toggle-button.active .toggle-switch {
    background-color: #003366;
  }

  .toggle-button.active .toggle-switch::before {
    transform: translateX(16px);
  }
  .titulo {
    font-size: 48px;
    font-weight: bold;
    text-align: center;
    margin-top: 50px;
  }
  .imagen {
    display: block;
    margin: 0 auto;
    max-width: 10%;
    height: auto;
    margin-bottom: 20px;
  }

  .enlace-olvidaste {
    text-align: center;
    margin-top: 20px;
  }

  .enlace-olvidaste a {
    font-size: 12px;
    color: #004c8f;
    text-decoration: none;
  }

  .enlace-olvidaste a:hover {
    text-decoration: underline;
  }

  .footer {
    background-color: #0054a3;
    color: #fff;
    text-align: center;
    padding: 20px;
    margin-top: 50px;
    font-size: 14px;
  }

  .footer p {
    margin: 0;
  }

  .footer a {
    color: #fff;
    text-decoration: none;
  }

  .footer a:hover {
    text-decoration: underline;
  }

  .password-field {
    position: relative;
  }
  .password-field input[type="password"] {
    padding-right: 40px;
  }
  .password-field .show-password-btn {
    background-color: #fff;
    border: none;
    color: #007bff;
    font-size: 14px;
    font-weight: 500;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
  }
  .password-field .show-password-btn:hover {
    cursor: pointer;
    text-decoration: underline;
  }

</style>
