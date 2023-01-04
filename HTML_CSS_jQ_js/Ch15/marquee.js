var msg = "歡迎光臨快樂小站～　　　　　　　　　　　　　　　　";
var interval = 1000;
var index = 0;
function marquee() {
  document.myForm.myText.value = msg.substring(index, msg.length)
     + msg.substring(0, msg.length);
  index++;       
  if (index > msg.length) index = 0;
  window.setTimeout("marquee();", interval);
}


