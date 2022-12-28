function swap(x, y) {
  var temp = x;
  x = y;
  y = temp;
}

var a = 1, b = 2;								// 將變數a, b的值設定為數值1, 2
alert('a = ' + a + ', b = ' + b);				// 顯示變數a, b在交換之前的值
swap(a, b);										// 呼叫swap() 函式將兩個參數的值交換
alert('a = ' + a + ', b = ' + b);				// 顯示變數a, b在交換之前的值
