<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="auth">
  <div class="auth__header">
    <div class="auth__logo">
      <img class="rounded mx-auto d-block" src="images/lms.png" alt="" height=120px>
    </div>
  </div>
  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action="your_leave" method="post">
      <div class="auth__form_body">
      <?php if(session()->get('success')) :?>
          <div class="alert alert-success" role="alert"> <?= session()->get('success') ?></div>
        <?php endif; ?>
        <h3 class="auth__form_title">Sign in</h3>
        <div>
          <div class="form-group input-group-md">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?= set_value('email') ?>">
            <!--<div class="invalid-feedback">
							 Errors in email during form validation, also add .is-invalid class to the input fields
						</div> -->
          </div>
          <div class="form-group input-group-md">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
            <!--<div class="invalid-feedback">
							 Errors in password during form validation, also add .is-invalid class to the input fields
						</div> -->
          </div>
          <!-- alert message error if form empty -->
          <?php if(isset($message)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $message->listErrors(); ?>
              </div>
            </div>
          <?php endif; ?>
          <button class="btn btn-lg btn-block btn-primary mt-4" type="submit">
            Login
          </button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>