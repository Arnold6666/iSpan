function myCallback(data) {
  var newContent = '';
  for (var i = 0; i < data.items.length; i++) {
    newContent += '<p>' + data.items[i].title + '</p>';
  }
  document.getElementById('content').innerHTML = newContent;
}
