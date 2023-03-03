<?php
// 多行內容
// $str = <<<END
// <pre>
//   hi
//     Hello
// nice
// </pre>
// END;

// echo $str;
// 一個英文 1 byte；中文 3 byte；emoji 4 byte
$s = "hello你好😀";
$str = "a,b,c";
$b = "<hi>&\n<hello>";
$c = "今天天氣晴";
$d = utf8_decode($c);
// echo strlen($s);
// echo "<br>";
// echo strlen(utf8_decode($s));
// var_dump(explode(",",$str));
// echo nl2br(htmlspecialchars($b));
// mb_substr可以根據指定編碼方式取得字串
// echo mb_substr($c,1,3,'utf-8');
// strstr搜尋字串，成功傳回字串與其後所有內容，失敗傳回false
// echo var_dump(strstr($c, "天氣aa"));
// strpos搜尋字串，成功傳回字串起始位置索引值，失敗傳回false
// echo strpos($c,"天氣");
echo var_dump(mb_strpos($c,"天氣aa",0,"utf-8"));

