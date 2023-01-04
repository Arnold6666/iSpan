function GO() {
  newWin = open();
  newWin.location.href = document.myForm.mySelect.options[document.myForm.mySelect.selectedIndex].value;
}