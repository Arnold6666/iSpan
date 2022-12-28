function addsub(x, y) {
  var add = x + y;
  var sub = x - y;
  return [add, sub];
}

var result = addsub(5, 3);
window.alert('5加3等於' + result[0] + '，5減3等於' + result[1]);
