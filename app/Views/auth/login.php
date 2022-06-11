<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Authentication - Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Authentication - Login</h4>
              </div>
              <div class="card-body">
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form action="<?= route_to('login') ?>" method="post" class="needs-validation" novalidate="">
                  <?= csrf_field() ?>
                  <?php if ($config->validFields === ['email']) : ?>
                    <div class="form-group">
                      <label for="login"><?= lang('Auth.email') ?></label>
                      <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  <?php else : ?>
                    <div class="form-group">
                      <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                      <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <?php if ($config->activeResetter) : ?>
                      <div class="d-block">
                        <label for="password" class="control-label"><?= lang('Auth.password') ?></label>
                        <div class="float-right">
                          <a href="/forgot" class="text-small">
                            Forgot Password?
                          </a>
                        </div>
                      </div>
                    <?php endif; ?>
                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                      <?= session('errors.password') ?>
                    </div>
                  </div>
                  <?php if ($config->allowRemembering) : ?>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                        <?= lang('Auth.rememberMe') ?>
                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                      </div>
                    </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <?php if ($config->allowRegistration) : ?>
              <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="/register">Create One</a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>