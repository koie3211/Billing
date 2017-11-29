<?php
  if (!isset($_POST['pass'])) {
    header('Location: login.php');
  }
  $pass = $_POST['pass'];
  if ($pass == "9453") {
    session_start();
    $_SESSION['is_login'] = true;
    $_SESSION['name'] = "Ken";
    echo "yes";
  }else {
    echo "no";
  }
 ?>
