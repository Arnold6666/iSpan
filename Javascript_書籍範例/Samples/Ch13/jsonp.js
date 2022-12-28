function showBooks(data) {
  var newContent = '';
  for (var i = 0; i < data.books.length; i++) {
    newContent += '<p>' + data.books[i].title + '</p>';
  }
  document.getElementById('content').innerHTML = newContent;
}
