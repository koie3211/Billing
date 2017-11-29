<?php
  session_start();
  if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) :
      header('Location: login.php');
 ?>
<?php else:?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="js/add_spending.js"></script>
    <link rel="stylesheet" href="css/index_css.css">
    <title>新增</title>
  </head>
  <body>
    <div class="main">
    <a class="btn btn-primary logoutbtn" href="index.php" role="button">取消</a>

    <form id="spend-form">
      <div class="form-group">
        <label for="date">日期</label>
        <input type="date" class="form-control" id="date">
      </div>
      <div class="form-group">
        <label for="category">請選擇一個科目</label>
        <select class="form-control" id="category">
          <option></option>
          <option>食</option>
          <option>衣</option>
          <option>住</option>
          <option>行</option>
          <option>育</option>
          <option>樂</option>
          <option>人</option>
        </select>
      </div>
      <div class="form-group">
        <label for="subcategory">類別</label>
        <select class="form-control" id="subcategory">
        </select>
      </div>
      <div class="form-group">
        <label for="cash">金額</label>
        <input type="number" class="form-control" id="cash" placeholder="輸入金額">
      </div>
      <div class="form-group">
        <label for="content">內容</label>
        <textarea class="form-control" id="content" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="ticket">發票號碼</label>
        <input type="text" class="form-control" id="ticket" maxlength="10" placeholder="可填可不填">
      </div>
      <button type="submit" class="btn btn-default">送出</button>
    </form>
</div>
  </body>
</html>
<?php endif; ?>
