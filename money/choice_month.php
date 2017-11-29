<?php
  session_start();
  require_once 'dbconfig.php';
  $result = '';
  $total=0;
  $year = $_POST['year'];
  $month = $_POST['month'];
  $choice = $year.'-'.$month.'%';
  $sql = "SELECT * FROM `billing` WHERE `date` LIKE '{$choice}' ORDER BY `date` DESC,`id` DESC";
  $query = mysqli_query($_SESSION['link'],$sql);
  if (mysqli_affected_rows($_SESSION['link'])>= 1) {
    while ($row = mysqli_fetch_assoc($query)) {
      $total+=$row['cash'];
      $data[] = $row;
    }
    foreach ($data as $key) {
      $result .=
       "<tr>
        <td>".$key['category']."</td>
        <td>".$key['date']."</td>
        <td>".$key['subcategory']."</td>
        <td>".$key['content']."</td>
        <td>".$key['cash']."</td>
        <td>
        <a type='button' class='btn btn-danger' href='javascript:void(0);' id='btn-del' data-id='{$key['id']}'>刪除</a>
         <a type='button' class='btn btn-dark' href='edit_spending.php?i={$key['id']}'>修改</a>
        </td>
      </tr>";
      $result .="<input type='hidden' id='total' value='{$total}'>";
    }
    echo $result;
  }else {
    $result = "<td colspan='6'>無資料!</td>
              <input type='hidden' id='total' value='0'>";
    echo $result;
  }



 ?>
