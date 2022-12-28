var X = 1;

try {
  var Z = X / Y;
} catch (e) {
  document.write(e.name + '<br>' + e.message);
} finally {
  document.write('<br>例外處理完畢！');
}
