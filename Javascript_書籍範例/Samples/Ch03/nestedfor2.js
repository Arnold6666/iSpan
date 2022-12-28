var str1 = '', str2 = '';
for (var i = 1; i <= 9; i++) {								//第一個迴圈的開始
  str1 = '';		
  for (var j = 1; j <= 9; j++) {							//第二個迴圈的開始
    if ((i * j) > 40){
	  break;
	}
    str1 = str1 + i + '*' + j + '=' + (i * j) + '\t';		//'\t' 表示 [Tab] 鍵
  }															//第二個迴圈的結尾
  str2 = str2 + str1 + '\n';								//'\n' 表示 [Enter] 鍵
}															//第一個迴圈的結尾
window.alert(str2);


