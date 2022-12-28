function checkScore(score) {
  if ((score < 0) || (score > 100)) {
    window.alert('分數超過範圍！');
    return;
  }
  else if (score >= 60) {
    window.alert('及格！');
  }
  else {
    window.alert('不及格！');
  }
}

var score = window.prompt('請輸入數學分數 (0-100)', '');
checkScore(score);
