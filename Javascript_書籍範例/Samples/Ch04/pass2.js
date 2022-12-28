function change(x) {
  x.score = 100;
}

var a = {score: 1};			// 將變數a的值設定為物件
window.alert(a.score);		// 顯示變數a在當作參數傳遞給函式之前的屬性值
change(a);					// 呼叫change() 函式改變參數的屬性值
window.alert(a.score);		// 顯示變數a在當作參數傳遞給函式之後的屬性值

