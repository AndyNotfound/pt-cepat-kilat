<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?= $title; ?></title>

    <!-- <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Google Fonts API -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/sign-x.css" />

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet" /> -->
  </head>
  <body>
    <div class="sign">
      <div class="illustration text-white">
        <img class="logo" src="/img/logo-login.svg" alt="PT Cepat Kilat" />
        <h1 class="slogan pb-4">Mengantar Paket Anda dengan cepat dan aman.</h1>
        <img src="/img/woman-driving-vespa.svg" alt="A woman lifting a box to pile them" />
      </div>
      <div class="form d-flex align-items-center justify-content-center">
        <div class="form-placeholder flex">
          <h2 class="form-headline">Daftar</h2>
          <form action="/auth/simpanregister" method="post" enctype="multipart/form-data" class="form-group">
            <?= csrf_field(); ?>
            <div>
              <input type="text" class="form-input <?= ($validation->hasError('namapengguna')) ? 'is-invalid' : ''; ?>" id="namapengguna" name="namapengguna" value="<?= old('namapengguna'); ?>" placeholder="Nama">
              <div class="invalid-feedback">
                  <?= $validation->getError('namapengguna'); ?>
              </div>
            </div>
            <div>
              <input type="text" class="form-input <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= old('username'); ?>" placeholder="Username" >
              <div class="invalid-feedback">
                  <?= $validation->getError('username'); ?>
              </div>
            </div>
            <div>
              <input type="password" class="form-input <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password'); ?>" placeholder="Password">
              <div class="invalid-feedback">
                  <?= $validation->getError('password'); ?>
              </div>
            </div>
            <div>
              <input type="password" class="form-input <?= ($validation->hasError('ulangipassword')) ? 'is-invalid' : ''; ?>" id="ulangipassword" name="ulangipassword" value="<?= old('ulangipassword'); ?>" placeholder="Ulangi Password">
              <div class="invalid-feedback">
                  <?= $validation->getError('ulangipassword'); ?>
              </div>
            </div>
            <button type="submit" class="form-button">Daftar</button>
            <p class="paragraph">Sudah Punya akun? <a class="link" href="/login">Masuk</a>.</p>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script> -->

    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
