<?php

  // $date = $_POST['date'];
  // $category = $_POST['category'];
  // $subcategory = $_POST['subcategory'];
  // $cash = $_POST['cash'];
  // $content = $_POST['content'];
  //
  // echo $date.$category.$subcategory.$cash.$content;

require_once 'functions.php';

$check = spending_add($_POST['date'],$_POST['category'],$_POST['subcategory'],$_POST['cash'],$_POST['content'],$_POST['ticket']);

if ($check) {
  echo "yes";
}else {
  echo "no";
}
 ?>
