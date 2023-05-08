
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
    document.getElementById('Size').value = "";
  }
  if(num==2)
  {
    getb.style.display = 'block';
  }
  else
  {
    getb.style.display = 'none';
    document.getElementById('Weight').value = "";


  }
  if(num==3)
  {
    getf.style.display = 'block';
  }
  else
  {
    getf.style.display = 'none';
    document.getElementById('Height').value = "";
    document.getElementById('width').value = "";
    document.getElementById('Lenth').value = "";

  }
};



// client side form checks

function SDKerror()
{
const SDK = document.getElementById("SKU");
const error = document.getElementById("error1");
const bnt =document.getElementById("save-product-bnt");


const SDKRegExp =/^[0-9]*$/;


// Checking if what the user typed is correct is displaying a error if its wrong
SDK.addEventListener("input", () => {
  const isValid = SDK.value.length === 0 || SDKRegExp.test(SDK.value);
  if (isValid) 
  {
    SDK.className = "valid";
    error.textContent = "";
    error.className = "error";
    bnt.disabled = false
  } 
  else
   {
    bnt.disabled = true
    SDK.className = "invalid";
    error.textContent = "Please input a number!";
    error.className = "error active";

   
  }
});

}

function Namerror()
{
  const input = document.getElementById("Name");
  const error = document.getElementById("error2");
  const bnt =document.getElementById("save-product-bnt");
  
  
  const nameRegExp =/^[a-zA-Z/\s/g]*$/;
  
  
  // Checking if what the user typed is correct is displaying a error if its wrong
  input.addEventListener("input", () => {
    const isValid = input.value.length === 0 || nameRegExp.test(input.value);
    if (isValid) 
    {
      input.className = "valid";
      error.textContent = "";
      error.className = "error";
      bnt.disabled = false
    }
     else
      {
      bnt.disabled = true
      input.className = "invalid";
      error.textContent = "Please input a Name!";
      error.className = "error active";
  
     
    }
  });
  
  }

  function pricerror()
  {
    const input = document.getElementById("Price");
    const error = document.getElementById("error3");
    const bnt =document.getElementById("save-product-bnt");
    
    
    const checkRegExp =/^[0-9]*$/;
    
    
    // Checking if what the user typed is correct is displaying a error if its wrong
    input.addEventListener("input", () => {
      const isValid = input.value.length === 0 || checkRegExp.test(input.value);
      if (isValid)
       {
        input.className = "valid";
        error.textContent = "";
        error.className = "error";
        bnt.disabled = false
      } 
      else 
      {
        bnt.disabled = true
        input.className = "invalid";
        error.textContent = "Please input a monetary value!";
        error.className = "error active";
    
       
      }
    });
    
    }

    function DVDerror()
    {
      const input = document.getElementById("Size");
      const error = document.getElementById("error4");
      const bnt =document.getElementById("save-product-bnt");
      
      
      const checkRegExp =/^[0-9]*$/;
      
      
      // Checking if what the user typed is correct is displaying a error if its wrong
      input.addEventListener("input", () => {
        const isValid = input.value.length === 0 || checkRegExp.test(input.value);
        if (isValid)
         {
          input.className = "valid";
          error.textContent = "";
          error.className = "error";
          bnt.disabled = false
        } 
        else
         {
          bnt.disabled = true
          input.className = "invalid";
          error.textContent = "Please input a monetary value!";
          error.className = "error active";
      
         
        }
      });
      
      }




        function bookerror()
        {
          const input = document.getElementById("Weight");
          const error = document.getElementById("error6");
          const bnt =document.getElementById("save-product-bnt");
          
          
          const checkRegExp =/^[0-9]*$/;
          
          
          // Checking if what the user typed is correct is displaying a error if its wrong
          input.addEventListener("input", () => {
            const isValid = input.value.length === 0 || checkRegExp.test(input.value);
            if (isValid)
             {
              input.className = "valid";
              error.textContent = "";
              error.className = "error";
              bnt.disabled = false
            } 
            else 
            {
              bnt.disabled = true
              input.className = "invalid";
              error.textContent = "Please input a measurements !";
              error.className = "error active";
          
             
            }
          });
          
          }

          function furniturerror()
          {
            const input1 = document.getElementById("Height");
            const input2 = document.getElementById("width");
            const input3 = document.getElementById("Lenth");
            const error = document.getElementById("error5");
            const bnt =document.getElementById("save-product-bnt");
            
            
            const checkRegExp =/^[0-9]*$/;
            
            
            // Checking if what the user typed is correct is displaying a error if its wrong
            input1.addEventListener("input", () => {
              const isValid = input1.value.length === 0 || checkRegExp.test(input1.value);
              if (isValid)
               {
                input1.className = "valid";
                error.textContent = "";
                error.className = "error";
                bnt.disabled = false
              } 
              else 
              {
                bnt.disabled = true
                input1.className = "invalid";
                error.textContent = "Please the height, width and Lenth in CM!";
                error.className = "error active";
            
               
              }
            });

            input2.addEventListener("input", () => {
              const isValid = input2.value.length === 0 || checkRegExp.test(input2.value);
              if (isValid) 
              {
                input2.className = "valid";
                error.textContent = "";
                error.className = "error";
                bnt.disabled = false
              } 
              else
               {
                bnt.disabled = true
                input2.className = "invalid";
                error.textContent = "Please the height, width and Lenth in CM!";
                error.className = "error active";
            
               
              }
            });

            input3.addEventListener("input", () => {
              const isValid = input3.value.length === 0 || checkRegExp.test(input3.value);
              if (isValid)
               {
                input3.className = "valid";
                error.textContent = "";
                error.className = "error";
                bnt.disabled = false
              }
               else
                {
                bnt.disabled = true
                input3.className = "invalid";
                error.textContent = "Please the height, width and Lenth in CM!";
                error.className = "error active";
            
               
              }
            });
            
            }

      


