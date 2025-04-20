<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ChieMedical | Register</title>
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
      margin-bottom: 20px ;
    }
    .register-box {
      max-width: 420px;
      margin: 15% auto;
    }
    .register-card-body {
      border-radius: 7px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
    }
    .register-logo img {
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="/">
      <img src="{{ asset('lte/dist/img/logo-chie-medical.png') }}" alt="ChieMedical Logo" style="height: 80px;">
    </a>
    <br>
    <a href="/"><b>Chie</b>Medical</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Join us! Create an account to start your seamless healthcare journey.</p>

      <form action="register" method="post">
        @csrf
        <div class="form-group">
          <label for="nama">Full Name</label>
          <div class="input-group">
            <input id="nama" name="nama" type="text" class="form-control" placeholder="input full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="no_hp">Phone Number</label>
          <div class="input-group">
            <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="input no. handphone">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="alamat">Address</label>
          <textarea id="alamat" name="alamat" class="form-control" placeholder="input address" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-group">
            <input id="email" name="email" type="email" class="form-control" placeholder="name@example.com">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <input id="password" name="password" type="password" class="form-control" placeholder="input password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-key"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>

      <p class="mt-3 text-center">Already have an account?
        <a href="/login">Login here!</a>
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
