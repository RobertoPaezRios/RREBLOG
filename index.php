<?php include ('./layouts/header.php'); ?>
<?php session_start(); ?>

<nav class="navbar sticky-top navbar-dark bg-info">
  <a class="navbar-brand" href="/">Home</a>
  <form action="login.php" method="post">
    <button class="btn btn-warning" name="btn-sign-in"><i class="fas fa-sign-in-alt"></i></button>
  </form>
</nav>

<?php if (isset($_SESSION['status'])) {
  if ($_SESSION['status'] == true) { ?>
      <div class="alert alert-<?= $_SESSION['color']; ?>" id="alert-login"><?= $_SESSION['message']; ?></div>   
<?php session_unset(); }
} ?>

<?php include ('./layouts/footer.php'); ?>