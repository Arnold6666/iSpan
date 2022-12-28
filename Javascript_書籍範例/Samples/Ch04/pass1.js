function change(x) {
  x = 100;
}

var a = 1;						// 將變數a的值設定為1
window.alert(a);				// 顯示變數a在當作參數傳遞給函式之前的值
change(a);						// 呼叫change()函式改變參數的值
window.alert(a);				// 顯示變數a在當作參數傳遞給函式之後的值
