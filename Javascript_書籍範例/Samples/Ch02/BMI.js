var height = window.prompt('請輸入身高 (公分)');
var weight = window.prompt('請輸入體重 (公斤)');
var BMI = weight / ((height / 100) ** 2);
var result = ((BMI >= 18.5) && (BMI < 24)) ? '健康體位' : '異常體位';
window.alert('您的BMI為' + BMI + ', 判斷結果為' + result);


