<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ChieMedical | Log in</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">

  <style>
    body {
      background: linear-gradient(to right, #f0f4f8, #d9e2ec);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-box {
      max-width: 420px;
      margin: 15% auto;
    }
    .login-card-body {
      border-radius: 7px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
    }
    .login-logo img {
      height: 100px;
      margin-bottom: 10px;
    }
    .form-group {
      color: #4a148c;
    }
    .form-control {
      border-radius: 5px;
      font-size: 13px;
    }
    .form-control:focus {
      border-color: #4a148c;
      box-shadow: 0 0 5px rgba(74, 20, 140, 0.5);
    }
    .input-group-text span {
      color: #4a148c;
    }
    .btn-primary {
      background-color: #4a148c;
      border-color: #4a148c;
      border-radius: 10px;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #6a1b9a;
      border-color: #6a1b9a;
    }
    p {
      font-size: 15px;
    }
    a {
      color: #4a148c;
    }
  </style>
</head>

<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
    <a href="/">
      <img src="{{ asset('lte/dist/img/logo-chie-medical.png') }}" alt="ChieMedical Logo" style="height: 80px;">
    </a>
    <br>
    <a href="/"><b>Chie</b>Medical</a>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Welcome back! Log in to continue your seamless healthcare experience.</p>

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-group">
            <input id="email" name="email" type="email" class="form-control" placeholder="name@example.com" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text rounded-right">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <input id="password" name="password" type="password" class="form-control" placeholder="input password" required>
            <div class="input-group-append">
              <div class="input-group-text rounded-right">
                <span class="fas fa-key"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <p class="mt-3 mb-0 text-center">Don't have an account?
        <a href="/register">Register here!</a>
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
