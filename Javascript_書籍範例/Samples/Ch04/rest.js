function add(...numbers) {
  var result = 0;
  for (let num of numbers) {
   result += num;
  }
  return result;
}

window.alert(add(1, 2));
window.alert(add(1, 2, 3, 4, 5));

