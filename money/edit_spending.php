<?php
  session_start();
  if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) :
      header('Location: login.php');
 ?>
<?php else:?>
<!DOCTYPE html>
<?php
  require_once 'dbconfig.php';
  $sql = "SELECT * FROM `billing` WHERE `id` = {$_GET['i']}";
  if ($result = mysqli_query($link,$sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data = $row;
    }
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="js/edit_spending.js"></script>
    <link rel="stylesheet" href="css/index_css.css">
    <title>修改</title>
  </head>
  <body>
    <div class="main">
    <a class="btn btn-primary logoutbtn" href="index.php" role="button">取消</a>

    <form id="edit-spend">
      <input type="hidden" id ="id" value="<?php echo $_GET['i'] ?>">
      <div class="form-group">
        <label for="date">日期</label>
        <input type="date" class="form-control" id="date" value="<?php echo $data['date'] ?>">
      </div>
      <div class="form-group">
        <label for="category">請選擇一個科目</label>
        <select class="form-control" id="category">
          <option <?php echo ($data['category']=='')?"selected":"";?>></option>
          <option <?php echo ($data['category']=='食')?"selected":"";?>>食</option>
          <option <?php echo ($data['category']=='衣')?"selected":"";?>>衣</option>
          <option <?php echo ($data['category']=='住')?"selected":"";?>>住</option>
          <option <?php echo ($data['category']=='行')?"selected":"";?>>行</option>
          <option <?php echo ($data['category']=='育')?"selected":"";?>>育</option>
          <option <?php echo ($data['category']=='樂')?"selected":"";?>>樂</option>
          <option <?php echo ($data['category']=='人')?"selected":"";?>>人</option>
        </select>
      </div>
      <div class="form-group">
        <label for="subcategory">類別</label>
        <select class="form-control" id="subcategory">
          <?php echo "<option>".$data['subcategory']."</option>" ?>
        </select>
      </div>
      <div class="form-group">
        <label for="cash">金額</label>
        <input type="number" class="form-control" id="cash" placeholder="輸入金額" value="<?php echo $data['cash'] ?>">
      </div>
      <div class="form-group">
        <label for="content">內容</label>
        <textarea class="form-control" id="content" rows="3"><?php echo $data['content'] ?></textarea>
      </div>
      <div class="form-group">
        <label for="ticket">發票號碼</label>
        <input type="text" class="form-control" id="ticket" placeholder="可填可不填"  maxlength="10" value="<?php echo $data['ticket'] ?>">
      </div>
      <button type="submit" class="btn btn-default">送出</button>
    </form>
</div>
  </body>
</html>
<?php endif; ?>
