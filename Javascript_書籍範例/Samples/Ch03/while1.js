var number = prompt('請輸入1-10的數字', '');
while (number != 6) {
  if (number > 6){						//太大了繼續做答
    window.alert('太大了！請重新輸入！');
    number = prompt('請輸入1-10的數字', '');
  }
  else if (number < 6) {				//太小了繼續做答
    window.alert('太小了！請重新輸入！');
    number = prompt('請輸入1-10的數字', '');
  }
}
window.alert('答對了！');
