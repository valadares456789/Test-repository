<?php
include('..\CLASSES\insert_form_class.php')

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/index.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../CSS/form.css">
   
    <title>form page</title>
</head>

<body>

    <div id="title">
        <div id="title2">
        <h1  id="titletext">New product</h1>
        </div>
        <button form="product_form" type="submit" value="save" name="submit" id="save-product-bnt" >
            save
        </button>
        <a href="../index.php" id="cancel-product-bnt" >
               Cancel
        </a>
    </div>
    <!--Item scroll-->
    <div class="scroll">
       

      
        <div id="form">

                   <!-- General info -->    

                <form action="form.php" id="product_form" method="POST">
                <label>SKU:</label><br>
                <input name="SKU" id="SKU" class="placeholder" autocomplete="off" type="text" onclick="SDKerror()" required><br>
                <span class="error" id="error1" aria-live="polite"></span><br>
                <label>Name:</label><br>
                <input  name="Name" id="Name" autocomplete="off" type="text"  onclick="Namerror()" required><br>
                <span class="error" id="error2" aria-live="polite"></span><br>
                <label>Price:</label><br>
                <input  name="Price" id="Price" autocomplete="off" type="text"  placeholder="$"  onclick="pricerror()" required><br>
                <span class="error" id="error3" aria-live="polite"></span><br>

                <!-- product type dropdown list -->

                <label>Type:</label><br>

                <select name="productTypes" id="productTypes" class="options" onchange="showHideInput(this)"  required>
                
                <option value="0" id="none" class="options">none</option>
                <option value="1" id="DVD" class="options">DVD</option>
                <option value="2" id="Book" class="options">Book</option>
                <option value="3" id="Furniture" class="options">Furniture</option>
                
                </select>

                <!-- Individual type forms -->

                <div id="typeforms">

                     <div id="dvd" style="display:none"  class="types" >
                        <label>Size(MB):</label><br>
                        <input  name="Size" id="Size"  onclick="DVDerror()" value="" autocomplete="off" ><br>
                        <span class="error" id="error4" aria-live="polite"></span><br>
                        <label class="helpinfo">Data within the DVDs will not be read</label>

                    </div> 

                    <div id="furniture" style="display:none" class="types">
                        <label>Height(CM):</label>
                        <input  name="Height" id="Height"  onclick="furniturerror()" value="" autocomplete="off" >
                        <label>width(CM):</label>
                        <input  name="width" id="width" value="" autocomplete="off"  >
                        <label>Lenth(CM):</label>
                        <input  name="Lenth" id="Lenth"  value="" autocomplete="off" ><br>
                        <span class="error" id="error5" aria-live="polite"></span><br>
                        <label class="helpinfo">Please provide the info in centimeters only</label>

                    </div>

                    <div id="book" style="display:none" class="types">
                        <label>Weight(KG):</label>
                        <input  name="Weight" id="Weight" onclick="bookerror()" value="" autocomplete="off"  ><br>
                        <span class="error" id="error6" aria-live="polite"></span><br>
                        <label class="helpinfo">Only metric measurements will be accepted</label>
                    </div>
                </div>
                
               
               </form>
        </div>
        

    </div>
    <div id="footer">
        <h5 id="footertext">Scandiweb test-Gabriel Valadão Santos</h5>
    </div>

    
    <script src="../JAVASCRIPT/form_dynamics.js"></script>
</body>