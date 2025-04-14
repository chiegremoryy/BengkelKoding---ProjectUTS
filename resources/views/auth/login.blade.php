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
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    }
    .login-box {
      max-width: 420px;
      margin: 10% auto;
    }
    .login-card-body {
      border-radius: 10px;
      box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
    }
    .login-logo img {
      height: 80px;
      margin-bottom: 10px;
    }
    .form-control {
      border-radius: 5px;
    }
    .btn-primary {
      border-radius: 10px;
    }
  </style>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('lte/dist/img/logo-chie-medical.png') }}" alt="ChieMedical Logo">
    <br>
    <a href="#"><b>Chie</b>Medical</a>
  </div>
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Welcome back! Log in to continue your seamless healthcare experience.</p>

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-group">
            <input id="email" name="email" type="email" class="form-control" placeholder="Email" required autofocus>
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
            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text rounded-right">
                <span class="fas fa-lock"></span>
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

      <p class="mt-3 mb-0 text-center">
        <a href="/register">Register a new account</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
