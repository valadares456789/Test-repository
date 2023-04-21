
// product type form switch function

function showHideInput(sel) {
  var value = sel.value;  
  if(value==1)
      document.getElementById('dvd').style.display = 'block';
  else
      document.getElementById('dvd').style.display = 'none';
  if(value==2)
      document.getElementById('furniture').style.display = 'block';
  else
      document.getElementById('furniture').style.display = 'none';
  if(value==3)
      document.getElementById('book').style.display = 'block';
  else
      document.getElementById('book').style.display = 'none';
  

};