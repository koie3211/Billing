<?php
  $val = $_POST['val'];
  $str;

  switch ($val) {
    case '食':
      $str = "<option>三餐外食</option>
              <option>水果零食</option>
              <option>健康食品</option>
              <option>菸酒茶飲</option>
              <option>食材</option>
              <option>幼兒食品</option>
              <option>其他</option>";
      break;
    case '衣':
      $str = "<option>治裝配件</option>
              <option>送洗費</option>
              <option>美妝保養</option>
              <option>免洗衣褲</option>
              <option>其他</option>";
      break;
    case '住':
      $str = "<option>家具修繕</option>
              <option>電器用品</option>
              <option>水電瓦斯</option>
              <option>電視網路</option>
              <option>幼兒用品</option>
              <option>清潔用品</option>
              <option>生活用品</option>
              <option>手機通訊</option>
              <option>房租房貸</option>
              <option>其他</option>";
      break;
    case '行':
      $str = "<option>公共運輸</option>
              <option>高鐵</option>
              <option>停車路過</option>
              <option>保養維修</option>
              <option>計程車</option>
              <option>飛機</option>
              <option>租車加油</option>
              <option>購車車貸</option>
              <option>其他</option>";
      break;
    case '育':
      $str = "<option>教育學費</option>
              <option>書報雜誌</option>
              <option>運動健身</option>
              <option>文具用品</option>
              <option>其他</option>";
      break;
    case '樂':
      $str = "<option>電影音樂</option>
              <option>休閒玩樂</option>
              <option>園藝</option>
              <option>幼兒玩具</option>
              <option>遊戲3C</option>
              <option>寵物</option>
              <option>古玩收藏</option>
              <option>其他</option>";
      break;
    case '人':
      $str = "<option>醫療藥品</option>
              <option>尊親捐款</option>
              <option>送禮</option>
              <option>電視網路</option>
              <option>貸款借款</option>
              <option>保險</option>
              <option>紅白包</option>
              <option>投資損失</option>
              <option>稅款罰款</option>
              <option>其他</option>";
      break;
    default:
      $str = "error";
      break;
  }

  echo $str;

 ?>
