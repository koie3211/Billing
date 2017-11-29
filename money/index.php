<?php
  session_start();
  if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) :
      header('Location: login.php');
 ?>
<?php else:?>
 <!DOCTYPE html>
  <?php
    $d = date('Y-m%');
    $total = 0;
    require_once 'dbconfig.php';
    $sql = "SELECT * FROM `billing`  WHERE `date` LIKE '{$d}' ORDER BY `date` DESC,`id` DESC";
    if ($result = mysqli_query($link,$sql)) {
      while ($row = mysqli_fetch_assoc($result)) {
        $total+=$row['cash'];
        $data[] = $row;


      }
    }
  ?>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="js/index_js.js"></script>
     <link rel="stylesheet" href="css/index_css.css">
     <title>凱哥記帳</title>
   </head>
   <body>
     <div class="main">
       <div class="monthchoice">
         <div class="monthcontent">
           <div class="yearchoice">
             <span class="cursor" data-id="subyear"><</span><span id="year"><?php echo date('Y'); ?></span><span class="cursor" data-id="addyear">></span>
           </div>
             <div class="number">
               <button type="button" class="btn btn-primary" data-id="btn-1">&nbsp1 月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-2">&nbsp2 月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-3">&nbsp3 月</button>
             </div>
             <div class="number">
               <button type="button" class="btn btn-primary" data-id="btn-4">&nbsp4 月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-5">&nbsp5 月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-6">&nbsp6 月</button>
             </div>
             <div class="number">
               <button type="button" class="btn btn-primary" data-id="btn-7">&nbsp7 月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-8">&nbsp8 月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-9">&nbsp9 月</button>
             </div>
             <div class="number">
               <button type="button" class="btn btn-primary" data-id="btn-10">10月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-11">11月</button>&nbsp&nbsp&nbsp&nbsp
               <button type="button" class="btn btn-primary" data-id="btn-12">12月</button>
             </div>
         </div>
       </div>
       <div class="datepicker">
         <img src="image/calendar.png" class="date" id="datetimepicker">
       </div>

       <div class="title">
         <h1>Hi <?php echo $_SESSION['name'] ?></h1>
         <header><?php echo date('Y 年 m 月 d 日'); ?></header>
       </div>
       <a class="btn btn-primary logoutbtn" href="logout.php" role="button">登出</a>

       <table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th>日期</th>
      <th>類別</th>
      <th>內容</th>
      <th>金額</th>
      <th>管理</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($data)): ?>
      <?php foreach ($data as $key): ?>
        <tr>
          <td><?php echo $key['category'] ?></td>
          <td><?php echo $key['date'] ?></td>
          <td><?php echo $key['subcategory'] ?></td>
          <td><?php echo $key['content'] ?></td>
          <td><?php echo $key['cash'] ?></td>
          <td>
            <a type="button" class="btn btn-danger" href="javascript:void(0);" id="btn-del" data-id="<?php echo $key['id'] ?>">刪除</a>
            <a type="button" class="btn btn-dark" href="edit_spending.php?i=<?php echo $key['id']?>">修改</a>
          </td>
        </tr>
        <input type="hidden" id="total" value="<?php echo $total; ?>">
      <?php endforeach; ?>
    <?php else:?>
      <td colspan="6">無資料!</td>
    <?php endif; ?>

  </tbody>
</table>
<div class="main">
  本月總支出金額：<span id="showtotal"><?php echo $total; ?></span>
</div>
<div class="">
&nbsp
</div>
<div class="">
  &nbsp
</div>
<a href="add_spending.php" class="btn btn-success" id="add" role="button">新增</a>
     </div>
   </body>
 </html>
<?php endif; ?>
