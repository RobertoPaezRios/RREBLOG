<?php include ('./layouts/header.php'); ?>
<?php session_start(); ?>

<nav class="navbar sticky-top navbar-dark bg-info">
  <a class="navbar-brand" href="/">Home</a>
</nav>
<?php if (isset($_SESSION['message'])) { ?>
  <div class="alert alert-<?= $_SESSION['color']; ?>" id="alert-login"><?= $_SESSION['message']; ?></div>
<?php session_unset(); } ?>

<form action="login2.php" method="post">
  <div class="form-group">
    <label for="login-username">Username</label>
    <input type="text" class="form-control" name="login-username" id="login-username" aria-describedby="textHelp">
    <small id="textHelp" class="form-text text-muted">Type an username</small>
  </div>
  <div class="form-group">
    <label for="login-password">Password</label>
    <input type="password" name="login-password" class="form-control" id="login-password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember-checkbox">
    <label class="form-check-label" for="remember-checkbox">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
</form>

<?php include ('./layouts/header.php'); ?>