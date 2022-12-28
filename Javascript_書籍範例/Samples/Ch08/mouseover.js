var fig = document.getElementById('fig');

fig.addEventListener('mouseover', function() {
  fig.src = 'piece2.jpg';
}, false);

fig.addEventListener('mouseout', function() {
  fig.src = 'piece1.jpg';
}, false);

