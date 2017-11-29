<?php

  //  $id = $_POST['id'];
   //
  //  echo $id;

require_once 'functions.php';

$check = spending_del($_POST['id']);
  //echo $check;
if ($check) {
  echo "yes";
}else {
  echo "no";
}
 ?>
