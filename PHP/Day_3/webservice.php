<?php
// web service
// $url = "https://mis.twse.com.tw/stock/api/getStockInfo.jsp?ex_ch=tse_2330.tw";
$url = "http://localhost/iSpan/PHP/Day_3/api.php";
$json = file_get_contents($url);

$jsonObj = json_decode($json, true);

foreach($jsonObj as $item){
  echo $item['cname'] ."<br>";
}

// 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
?>