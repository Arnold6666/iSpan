function User(name, age) {
  this.name = name;
  this.age = age;
  this.showMsg = function() {
    window.alert('Hi, 我是' + this.name + '!');
  };
}

var user1 = new User('小丸子', 20);
var user2 = new User('小紅豆', 18);

user1.showMsg();
window.alert(user1['age']);
user2.showMsg();
window.alert(user2['age']);


