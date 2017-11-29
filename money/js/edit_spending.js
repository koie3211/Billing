$(document).ready(function(){
  /**
    *顯示子類別
    */
    if ($("#category").val()!='') {
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
    }

  /**
    *送出表單和檢查
    */
  $("#edit-spend").on("submit",function(){
    if ($('#category option:selected').val()=='' ||
        $('#subcategory option:selected').val()=='' ||
        $("#cash").val()=='' ||
        $("#content").val()=='') {
      alert("請確實填寫!");
    }else {
      $.ajax({
        type : "POST",
        url : "spending_edit.php",
        data :{
            id : $("#id").val(),
            date : $("#date").val(),
            category : $('#category option:selected').val(),
            subcategory : $('#subcategory option:selected').val(),
            cash : $("#cash").val(),
            content : $("#content").val(),
            ticket : $("#ticket").val()
            },
        dataType : "html"
      }).done(function(data){
        alert(data);
        if (data =='yes') {
          alert("新增成功");
          window.location.href = "index.php";
        }
      }).error();
    }
    return false;
  });
  });
