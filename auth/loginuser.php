<!-- header -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Validation Form</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">

</head>
<!-- header -->


<body class="hold-transition layout-top-nav d-flex flex-column min-vh-100">

    <!-- Navbar -->


<div class="login-box">

  <div class="card card-outline card-primary">

    <div class="card-header text-center">
      <a href="../index.php" class="h1">
        <b>CV</b> Digital
      </a>
    </div>

    <div class="card-body">

      <p class="login-box-msg">
        Silakan masuk untuk memulai sesi
      </p>

      <!-- Form Login -->
      <form action="proses/proseslogin.php" method="post">
        

        <!-- Email -->
        <div class="input-group mb-3">

          <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Email"
            required
          >

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>

        <!-- Password -->
        <div class="input-group mb-3">

          <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Password"
            required
          >

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

        </div>

        <!-- Tombol Login -->
        <div class="row">

          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>

          <div class="col-4">
            <button
              type="submit"
              class="btn btn-primary btn-block"
            >
              Sign In
            </button>
          </div>

        </div>

      </form>

      <!-- Registrasi Peserta -->
      <p class="mb-0 mt-3">
        <a href="registrasipeserta.php" class="text-center">
          Registrasi sebagai Peserta
        </a>
      </p>

    </div>

  </div>

</div>

    <footer class="main-footer py-2 mb-0">

        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>

        <strong>
            Copyright &copy; 2014-2021
            <a href="https://adminlte.io">
                AdminLTE.io
            </a>.
        </strong>

        All rights reserved.

    </footer>



</body>

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->



</html><!-- /.footer -->