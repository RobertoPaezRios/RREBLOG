<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect(
  $server, 
  $username, 
  $password, 
  $database
);

if (!$conn) {
  die ('error in the db');
}

?>