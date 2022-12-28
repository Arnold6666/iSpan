let arr = [1, 2, 3];
let iterator = arr[Symbol.iterator]();
console.log(iterator.next());
console.log(iterator.next());
console.log(iterator.next());

let sym1 = Symbol.for('bar');
console.log(Symbol.keyFor(sym1));