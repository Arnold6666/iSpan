function sayHello() {
  return 'Hello, ';
}

function welcome(callback, name) {
  window.alert(callback() + name);
}

welcome(sayHello, '小丸子');