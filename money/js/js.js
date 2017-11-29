$(document).ready(function(){
  pass = "";
  $("button").on("click",function(){
    switch($(this).attr("data-id")){

        case "btn-1":
          pass+="1";
          $("input[name='pass']").val(pass);
          break;

        case "btn-2":
          pass+="2";
          $("input[name='pass']").val(pass);
          break;

        case "btn-3":
          pass+="3";
          $("input[name='pass']").val(pass);
          break;

        case "btn-4":
          pass+="4";
          $("input[name='pass']").val(pass);
          break;

        case "btn-5":
          pass+="5";
          $("input[name='pass']").val(pass);
          break;

        case "btn-6":
          pass+="6";
          $("input[name='pass']").val(pass);
          break;

        case "btn-7":
          pass+="7";
          $("input[name='pass']").val(pass);
          break;

        case "btn-8":
          pass+="8";
          $("input[name='pass']").val(pass);
          break;

        case "btn-9":
          pass+="9";
          $("input[name='pass']").val(pass);
          break;

        case "btn-0":
          pass+="0";
          $("input[name='pass']").val(pass);
          break;

        case "btn-b":
          pass=pass.substring(0, pass.length-1);
          $("input[name='pass']").val(pass);
          break;
      }
      if ($(".pass").val()!="") {
        $.ajax({
          type:"POST",
          url:"check.php",
          data:{
            pass : $(".pass").val()
          },
          dataType:"html"
        }).done(function(data){
          //console.log(data);
          if (data =="yes") {
            window.location.href = "index.php";
          }
        }).error();
      }
      if (pass.length ==4) {
        pass = "";
        $("input[name='pass']").val(pass);
      }
  });

});
