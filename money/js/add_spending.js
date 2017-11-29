$(document).ready(function(){
  /**
    *預設日期
    */
  var formattedDate = new Date();
  var d = formattedDate.getDate();
  if (d<10) d = '0'+d;
  var m = formattedDate.getMonth();
  m += 1;//JavaScript months are 0-11
  if (m<10) m = '0'+m;
  var y = formattedDate.getFullYear();
  $("#date").val(y +"-" + m +"-" + d);
  /**
    *顯示子類別
    */

  $("#category").on("change",function(){
    $.ajax({
      type : "POST",
      url : "category.php",
      data :{
          val : $('#category option:selected').val()
          },
      dataType : "html"
    }).done(function(data){
      $("#subcategory").html(data);
    }).error();
  });
  /**
    *送出表單和檢查
    */
  $("#spend-form").on("submit",function(){
    if ($('#category option:selected').val()=='' ||
        $('#subcategory option:selected').val()=='' ||
        $("#cash").val()=='' ||
        $("#content").val()=='') {
      alert("請確實填寫!");
    }else {
      $.ajax({
        type : "POST",
        url : "spending_add.php",
        data :{
            date : $("#date").val(),
            category : $('#category option:selected').val(),
            subcategory : $('#subcategory option:selected').val(),
            cash : $("#cash").val(),
            content : $("#content").val(),
            ticket : $("#ticket").val()
            },
        dataType : "html"
      }).done(function(data){
        if (data =='yes') {
          alert("新增成功");
          window.location.href = "index.php";
        }
      }).error();
    }
    return false;
  });
  });
