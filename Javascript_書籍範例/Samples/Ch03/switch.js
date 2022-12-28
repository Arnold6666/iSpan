var number = window.prompt('請輸入1-3的數字', '');
switch (number) {
  case '1':
    window.alert('ONE');
	break;
  case '2':
    window.alert('TWO');
	break;
  case '3':
    window.alert('THREE');
	break;
  default:
    window.alert('數字超過範圍');
	break;	
}