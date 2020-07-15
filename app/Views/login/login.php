<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="auth">
  <div class="auth__header">
    <div class="auth__logo" >
    </div>
  </div>
  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action = "" method="post">
      <div class="auth__form_body">
        <h3 class="auth__form_title">Sign in</h3>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?= set_value('email') ?>">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password') ?>">
          </div>
        </div>
      </div>
      <!-- alert message error if form login empty -->
      <?php if(isset($validation)) :?>
        <div class="col-12">
          <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors(); ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="auth__form_actions">
        <button class="btn btn-primary btn-lg btn-block">
          LOGIN
        </button>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>