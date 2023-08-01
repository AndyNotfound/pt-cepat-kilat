<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>PT Cepat Kilat - Sign In</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Google Fonts API -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/sign-x.css" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="sign">
      <div class="illustration text-white">
        <img class="logo" src="/img/logo-login.svg" alt="PT Cepat Kilat" />
        <h1 class="slogan">Mengantar Paket Anda dengan cepat dan aman.</h1>
        <img
          src="/img/woman-lift-box.svg"
          alt="A woman lifting a box to pile them"
        />
      </div>
      <div class="form d-flex align-items-center justify-content-center">
        <div class="form-placeholder flex">
        <div>
            <h2 class="form-headline">Masuk</h2>
            <?php if (session()->getFlashdata('logout')): ?>
                <div>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('logout'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('pesan')): ?>
                <div>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
          <form action="/auth/ceklogin" method="post" class="form-group">
            <div>
                <input type="username" class="form-input <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Username" value="<?= old('username'); ?>" autocomplete="off" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('username'); ?>
                </div>
            </div>
            <div>
                <input type="password" class="form-input <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?> <?= (old('password') == true) ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Password" autocomplete="off">
                <div class="invalid-feedback">
                    <?php if ($validation->hasError('password')) : ?>
                        <?= $validation->getError('password'); ?>
                    <?php else : ?>
                        Maaf, Password yang anda masukkan salah!
                    <?php endif; ?>
                </div>
            </div>
            <button class="form-button">Masuk</button>
            <p class="paragraph">
              Belum Punya akun? <a class="link" href="/register">Daftar</a>.
            </p>
          </form>
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
  </body>
</html>
