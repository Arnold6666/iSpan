var score = window.prompt('請輸入數學分數 (0-100)', '');
if (score >= 90) {
  window.alert('優等！');
}
else if (score < 90 && score >= 80) {
  window.alert('甲等！');
}
else if (score < 80 && score >= 70) {
  window.alert('乙等！');
}
else if (score < 70 && score >= 60) {
  window.alert('丙等！');
}
else {
  window.alert('不及格！');
}