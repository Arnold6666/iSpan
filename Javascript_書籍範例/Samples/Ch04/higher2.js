function sayHello(name) {
  return function() {
    window.alert('Hello, ' + name);
  }
}

sayHello('小丸子')();