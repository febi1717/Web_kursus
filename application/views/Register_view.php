<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Registrasi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="teks/css" href="style.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="assets/frontend/css/style2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div style="background-image: url('assets/img/11.jpg');" class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <a href="<?php echo site_url('Welcome') ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="pelajar-tab" data-bs-toggle="tab" data-bs-target="#pelajar" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Pelajar</button>
                  <button class="nav-link" id="vendor-tab" data-bs-toggle="tab" data-bs-target="#vendor" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Vendor</button>
                </div>
              </nav>

              <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="pelajar" role="tabpanel" aria-labelledby="pelajar-tab">
                    <div class="form-group">
                      <label style="font-size:13px; padding-top:1rem;">Username</label>
                      <input type="username" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label style="font-size:13px;">Password</label>
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label style="font-size:13px;">Nama Lengkap</label>
                        <input type="password" class="form-control form-control-user" id="exampleInputNama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label style="font-size:13px;">Email</label>
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                    </div>
                    <a href="<?php echo site_url('Welcome') ?>" class="btn btn-primary btn-user btn-block">
                        Daftar
                    </a>
                  </div>

                  <div class="tab-pane fade" id="vendor" role="tabpanel" aria-labelledby="vendor-tab">
                      <div class="form-group">
                          <label style="font-size:13px; padding-top:1rem;">Username</label>
                          <input type="username" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label style="font-size:13px;">Password</label>
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label style="font-size:13px;">Nama Lengkap</label>
                            <input type="password" class="form-control form-control-user" id="exampleInputNama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                          <label style="font-size:13px;">Email</label>
                          <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                          <label style="font-size:13px;">Keahlian</label>
                          <input type="name" class="form-control form-control-user" id="exampleKeahlian" placeholder="Keahlian">
                        </div>
                        <div class="form-group">
                          <label style="font-size:13px;">Pendidikan</label>
                          <input type="name" class="form-control form-control-user" id="exampleInputPendidikan" placeholder="Pendidikan">
                        </div>
                        <a href="<?php echo site_url('Welcome') ?>" class="btn btn-primary btn-user btn-block">
                            Daftar
                        </a>
                    </div>
                  </div>
              <div class="text-center">
                <a class="small" href="<?php echo site_url('Forgetpass') ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo site_url('Login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>
