function F(n) {
  if (n === 0) {				// 當n = 0時，F(n) = n! = 0! = 1
    return 1;
  }
  else if (n > 0) {				// 當n > 0時，F(n) = n! = n * F(n - 1)
    return n * F(n - 1);
  }
  else {						// 當n < 0時，F(n) = -1，表示無法計算階乘
    return -1;						
  }
}

window.alert('0! = ' + F(0));
window.alert('5! = ' + F(5));