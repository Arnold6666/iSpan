var sayHello = function(name) {
  return function() {
    window.alert('Hello, ' + name);
  }
}

var myFunc = sayHello('小丸子');
myFunc();