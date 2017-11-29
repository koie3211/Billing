<?php
  $host = "Your host name";
  $user = "Your username";
  $pass = "Your password";
  $mydb = "money";
  $link = mysqli_connect($host ,$user ,$pass ,$mydb);
  if($link)
  {
    mysqli_query($link,"SET NAMES 'UTF8'");
    $_SESSION['link'] = $link;
    //echo "200 OK";
  }else
  {
    echo "error".mysqli_connect_error();
  }
 ?>
