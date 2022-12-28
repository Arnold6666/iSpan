var user = new Object();

user.name = '小丸子';
user.age = 20;

user.showMsg = function() {
  window.alert('Hi, 我是' + this.name + '!');
};

user.showMsg();
window.alert(user['age']);
