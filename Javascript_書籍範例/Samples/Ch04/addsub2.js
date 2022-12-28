function addsub(x, y) {
  var add = x + y;
  var sub = x - y;
  return [add, sub];
}

var [a, s] = addsub(5, 3);
window.alert('5加3等於' + a + '，5減3等於' + s);
