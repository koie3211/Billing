$(document).ready(function(){
  /**
    *刪除資料
    */
    $("a#btn-del").on("click",function(){
      c = confirm("確定刪除?");

      if (c) {
        $.ajax({
          type : "POST",
          url : "spending_del.php",
          data :{
              id : $(this).attr("data-id")
              },
          dataType : "html"
        }).done(function(data){
          //console.log(data);
          if (data == 'yes') {
            alert("刪除成功!");
            window.location.href = "index.php";
          }else {
            alert("刪除失敗!");
          }
        }).error();
      }
    });
    /**
      *彈出月份選擇
      */
    $(".date").on("click",function(){
      $(".monthchoice").css("display","block");
    });
    // /**
    //   *隱藏月份選擇
    //   */
    // $(".monthchoice").on("click",function(){
    //   $(".monthchoice").css("display","none");
    // });
    /**
      *選擇月份
      */
      $("button").on("click",function(){
        $('tbody').html("");
        $(".monthchoice").css("display","none");
        var month;
        switch($(this).attr("data-id")){

            case "btn-1":
              month = "01";
              break;

            case "btn-2":
              month = "02";
              break;

            case "btn-3":
              month = "03";
              break;

            case "btn-4":
              month = "04";
              break;

            case "btn-5":
              month = "05";
              break;

            case "btn-6":
              month = "06";
              break;

            case "btn-7":
              month = "07";
              break;

            case "btn-8":
              month = "08";
              break;

            case "btn-9":
              month = "09";
              break;

            case "btn-10":
              month = "10";
              break;

            case "btn-11":
              month = "11";
              break;

            case "btn-12":
              month = "12";
              break;
          }
          $.ajax({
            type:"POST",
            url:"choice_month.php",
            data:{
              year : $('#year').text(),
              month : month
            },
            dataType:"html"
          }).done(function(data){
            //console.log(data);
            $('tbody').html(data);
            $('#showtotal').text($('#total').val());
          }).error();
      });
      /**
        *選擇年份
        */
      $('span').on("click",function(){
        switch($(this).attr("data-id")){
          case 'subyear' :
            //var c = confirm("sss");
            $('#year').text(parseInt($('#year').text())-1);
            break;
          case 'addyear' :
            //var c = confirm("lll");
            $('#year').text(parseInt($('#year').text())+1);
            break;
        }
      });
  });
