function getArea1(radius) {
  var area = 3.14 * radius * radius;
  window.alert('半徑為' + radius + '的圓面積為' + area);
}

var cicleRadius = window.prompt('請輸入半徑', '');
getArea1(cicleRadius);


