<?php
include ('./db/db.php');

session_start();

if (!empty($_POST['login-username']) && !empty($_POST['login-password'])) {
  $loginUsername = $_POST['login-username'];
  $loginPassword = $_POST['login-password'];
  $query = "SELECT * FROM users WHERE username = '$loginUsername' && password = '$loginPassword'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
}

if (isset($row['username']) && isset($row['password'])) {
  if ($_POST['login-username'] == $row['username'] && $_POST['login-password'] == $row['password']) {
    $_SESSION['message'] = 'You are logged in';
    $_SESSION['color'] = 'success';
    $_SESSION['status'] = true;
    header("Location: index.php");  
  }
} else {
  $_SESSION['message'] = 'The credentials are incorrect';
  $_SESSION['color'] = 'danger';
  $_SESSION['status'] = false;
  header("Location: login.php");
}

?>