// 顯示Number物件的屬性值 (靜態屬性可以直接存取，無須建立物件)
console.log(Number.MAX_VALUE);
console.log(Number.MIN_VALUE);
console.log(Number.MAX_SAFE_INTEGER);
console.log(Number.MIN_SAFE_INTEGER);
console.log(Number.NaN);
console.log(Number.NEGATIVE_INFINITY);
console.log(Number.POSITIVE_INFINITY);
console.log(Number.EPSILON);

// 透過變數X呼叫Number物件的方法
var X = 123.875;
console.log(X.toString());
console.log(X.toString(2));
console.log(X.toExponential());
console.log(X.toExponential(4));
console.log(X.toFixed());
console.log(X.toFixed(4));
console.log(X.toPrecision(2));
console.log(X.toPrecision(4));

// 靜態方法可以直接呼叫，無須建立物件
console.log(Number.isNaN(NaN));	
console.log(Number.isNaN(100));	
console.log(Number.isFinite(100));				
console.log(Number.isFinite(-Infinity));		
console.log(Number.isInteger(100));		
console.log(Number.isInteger(-Infinity));		
console.log(Number.isSafeInteger(100));	
console.log(Number.parseFloat('123.875abc'));
console.log(Number.parseInt('123.875abc'));
console.log(Number.parseInt('123.875abc', 16));