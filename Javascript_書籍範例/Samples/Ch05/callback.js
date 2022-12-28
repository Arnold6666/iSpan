var array1 = [1, 2, 3, 4, 5];
array1.forEach(function(value, index, array) {
  console.log(value ** 2);
});

array1.forEach(value => console.log(value ** 2));


function logArrayElements(value, index, array) {
  console.log('a[' + index + '] = ' + value);
}
var array2 = ['a', , 'c'];
// 索引1的位置沒有元素，所以會被省略
array2.forEach(logArrayElements);


// pass a function to map
var result = array1.map(function(value, index, array) {
  return value ** 2;								
});
console.log(result);

var result = array1.map(x => x ** 2);
console.log(result);

var result = array1.some(function(value, index, array) {
  return value % 2 === 0;								
});
console.log(result);

var result = array1.every(function(value, index, array) {
  return value % 2 === 0;								
});
console.log(result);

var result = array1.filter(function(value, index, array) {
  return value % 2 === 0;								
});
console.log(result);




