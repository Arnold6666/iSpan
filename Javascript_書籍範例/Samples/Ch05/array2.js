var scores = [['姓名', '國文', '英文', '數學'], 
              ['王小美', 85, 88, 77], 
              ['孫大偉', 99, 86, 89], 
			  ['張婷婷', 75, 92, 86]];

document.write('<table border="1">');
for(var i = 0; i < scores.length; i++) {
  document.write('<tr>');
  for(var j = 0; j < scores[i].length; j++)
    document.write('<td>' + scores[i][j] + '</td>');
  document.write('</tr>');
}
document.write('</table>');


