function trapezoidArea(top, bottom, height = 5) {
  var area = (top + bottom) * height / 2;
  window.alert('梯形面積為' + area);
}

trapezoidArea(10, 20);
trapezoidArea(10);