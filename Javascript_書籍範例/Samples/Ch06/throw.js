var radius = window.prompt('請輸入圓半徑');

try {
  var circleArea = Math.PI * radius * radius;
  if (!Number.isNaN(circleArea))
    document.write('圓形面積為' + circleArea);
  else
    throw new Error('無法計算圓形面積');
} catch (e) {
  document.write(e.name + '<br>' + e.message);
} finally {
  document.write('<br>程式執行完畢');
}