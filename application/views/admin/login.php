<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vaswani Industries Ltd. Admin | Log in</title>
  <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/assets/images/favicon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
</head>

<style>
   .fa-eye{
    position:absolute;
    right:0;
    top:0;
    font-size:18px !important;
    padding: 12px 10px;
    z-index:10;
    color:#555;
    cursor:pointer;
   }
</style>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url()?>" target="_blank"><img src="<?=base_url()?>assets/images/logo_with_text.png" height="50" alt="Logo"></a> <br> <br>
      <strong class="text-dark">Admin</strong>
  </div>
  <!-- /.login-logo -->
  <div class="card shadow">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-dark">Log in</p>

      
      <form method="post" action="<?php echo base_url('Login/authenticate'); ?>">
        <div class="input-group mb-3 bg-light ">
          <div class="input-group-append">
            <div class="input-group-text border-top-0 border-left-0 border-right-0">
              <span class="fas fa-user-alt"></span>
            </div>
          </div>
          <input type="text" class="form-control bg-light border-top-0 border-left-0 border-right-0 text-dark" placeholder="Username" name="uname" required>
        </div>
        <div class="input-group mb-3 bg-light">
          <div class="input-group-append">
            <div class="input-group-text border-top-0 border-left-0 border-right-0">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <input type="password" id="password" class="form-control bg-light border-top-0 border-left-0 border-right-0 text-dark" placeholder="Password" name="pwd" required>
          <i class="fa fa-eye" onclick="showPwd()" title="Show/hide Password" id="toggleEye"></i>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-md-4 mt-2 col-xs-6">
            <button type="submit" class="btn btn-primary shadow btn-block btn-flat">Log In &nbsp;➝</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <p class="mb-1 mt-3">
        <a href="#">Forgot password ?</a>
      </p> -->
      <?php if(isset($errors)) : ?>
        <h6 class="alert alert-danger mt-4 font-weight-normal"><?= $errors ?></h6>
      <?php endif; ?>

    </div>
    <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->

  <script>
        function showPwd() {
          var x = document.getElementById("password");
          var eye = document.getElementById("toggleEye");
          if (x.type === "password") {
            x.type = "text";
            eye.classList.add("fa-eye-slash");
          } else {
            x.type = "password";
            eye.classList.remove("fa-eye-slash");
          }
        }
  </script>

</body>
</html>
