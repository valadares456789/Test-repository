
// product type form switch function

function showHideInput(sel) 
  {
    
// product type divs requests
    var getd= document.getElementById('dvd');
    var getb= document.getElementById('book');
    var getf= document.getElementById('furniture');
 






// product type ifs
  var num = sel.value;  
  if(num==1)
  {
    getd.style.display = 'block';
  }
  else
  {
    getd.style.display = 'none';
  }
  if(num==2)
  
    getb.style.display = 'block';
  
  else
  
    getb.style.display = 'none';
  
  if(num==3)
  
    getf.style.display = 'block';
  
  else
  
    getf.style.display = 'none';
  

     

  

};


