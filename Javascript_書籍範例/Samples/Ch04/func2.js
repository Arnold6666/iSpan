function getArea2(radius) {
  var area = 3.14 * radius * radius;
  return area;
}

var circleRadius = window.prompt('請輸入半徑', '');
var cicleArea = getArea2(circleRadius);
window.alert('半徑為' + circleRadius + '的圓面積為' + cicleArea);


