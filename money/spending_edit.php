<?php
require_once 'functions.php';

// $id = $_POST['id'];
// $date = $_POST['date'];
// $category = $_POST['category'];
// $subcategory = $_POST['subcategory'];
// $cash = $_POST['cash'];
// $content = $_POST['content'];
// $ticket = $_POST['ticket'];
//
// echo $id.$date.$category.$subcategory.$cash.$content.$ticket;

$check = spending_edit($_POST['id'],$_POST['date'],$_POST['category'],$_POST['subcategory'],$_POST['cash'],$_POST['content'],$_POST['ticket']);

if ($check) {
  echo "yes";
}else {
  echo "no";
}
 ?>
