var user = {
  name : '小丸子',
  age : 20,
  showMsg: function() {
    window.alert('Hi, 我是' + this.name + '!');
  }
};

user.showMsg();
window.alert(user['age']);
