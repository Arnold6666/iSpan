function trapezoidArea({top, bottom, height}) {
  var area = (top + bottom) * height / 2;
  window.alert('梯形面積為' + area);
}

trapezoidArea({height: 5, bottom: 20, top: 10});
trapezoidArea({height: 5, top: 10, bottom: 20});