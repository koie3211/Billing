<?php
require_once 'dbconfig.php';

//新增支出
function spending_add($date,$category,$subcategory,$cash,$content,$ticket)
{
  if ($ticket == '') {
    $sql = "INSERT INTO `billing` (`category`,`date`,`subcategory`,`content`,`cash`,`ticket`)
            VALUES ('{$category}','{$date}','{$subcategory}','{$content}',{$cash},null)";
  }else {
    $sql = "INSERT INTO `billing` (`category`,`date`,`subcategory`,`content`,`cash`,`ticket`)
            VALUES ('{$category}','{$date}','{$subcategory}','{$content}',{$cash},'{$ticket}')";
  }

  $result = mysqli_query($_SESSION['link'],$sql);

  return $result;
}

//修改支出
function spending_edit($id,$date,$category,$subcategory,$cash,$content,$ticket)
{
  if ($ticket == '') {
    $sql = "UPDATE `billing` SET `category` = '{$category}',
                                      `date` = '{$date}',
                                      `subcategory` = '{$subcategory}',
                                      `content` = '{$content}',
                                      `cash` = {$cash},
                                      `ticket` = null
                                      WHERE `id` = {$id}";
  }else {
    $sql = "UPDATE `billing` SET `category` = '{$category}',
                                      `date` = '{$date}',
                                      `subcategory` = '{$subcategory}',
                                      `content` = '{$content}',
                                      `cash` = {$cash},
                                      `ticket` = '{$ticket}'
                                      WHERE `id` = {$id}";
  }

  $result = mysqli_query($_SESSION['link'],$sql);

  return $result;
}

//刪除支出
function spending_del($id)
{
  $sql = "DELETE FROM `billing` WHERE `id` = $id";
  //return $sql;
  $query = mysqli_query($_SESSION['link'],$sql);

  if (mysqli_affected_rows($_SESSION['link'])== 1) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}
//選擇月份
function month_choice($choice)
{
  $sql = "SELECT * FROM `billing` WHERE `date` LIKE '{$choice}' ORDER BY `date` DESC,`id` DESC";
  $query = mysqli_query($_SESSION['link'],$sql);
  if (mysqli_affected_rows($_SESSION['link'])> 1) {
    while ($row = mysqli_fetch_assoc($query)) {
      $result[] = $row;
    }
  }else {
    $result = '無資料!';
  }
  return $result;
}
 ?>
