do {
  var number = prompt('請輸入1-10的數字', '');
  if (number > 6){	
    window.alert('太大了！請重新輸入！');
  }
  else if (number < 6) {
    window.alert('太小了！請重新輸入！');
  }
} while (number != 6);
window.alert('答對了！');
