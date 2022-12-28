var X = 'Hello, world!';
var Y = 'WowWowWowWowWow';
var Z = '  Good!  ';

//搜尋
console.log(Y.indexOf('Wow')); 		
console.log(Y.lastIndexOf('Wow')); 	
console.log(Y.includes('ow')); 			
console.log(Y.startsWith('ow')); 		
console.log(Y.endsWith('ow')); 		
//擷取部分字串
console.log(X.charAt(0)); 					
console.log(X.charCodeAt(0)); 			
console.log(X.split('o')); 					
console.log(X.substr(2, 3)); 				
console.log(X.slice(1, 5)); 					
console.log(X.substring(1, 5));
console.log(X.slice(5, 1));
console.log(X.substring(5, 1)); 			
console.log(X.slice(1, -5)); 					
console.log(X.substring(1, -5)); 			
//正規表示法
console.log(X.search('llo')); 				
console.log(X.match('llo')); 				
console.log(X.replace('Hello', 'Hi')); 	
//其它
console.log(X.toLowerCase());			
console.log(X.toUpperCase());			
console.log(Z.concat('Perfect!')); 		
console.log(Z.repeat(2)); 					
console.log(Z.trim());						





