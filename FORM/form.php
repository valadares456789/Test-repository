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
    <script src="../JAVASCRIPT/form_dynamics.js"></script>
    <title>form page</title>
</head>

<body>

    <div id="title">
        
        <h1  id="titletext">New product</h1>
        <input form="product_form" type="submit" value="save" name="submit" id="save-product-bnt" >
      
        </input>
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
                <input name="SKU" id="SKU" autocomplete="off" type="text"  required><br>
        
                <label>Name:</label><br>
                <input  name="Name" id="Name" autocomplete="off" type="text"  required><br>

                <label>Price:</label><br>
                <input  name="Price" id="Price" autocomplete="off" type="text"  placeholder="$"  required><br>

                <!-- product type dropdown list -->

                <label>Type:</label><br>

                <select name="productTypes" id="productTypes" class="options" onchange="showHideInput(this)"  required>
                
                <option value="0" id="none" class="options">none</option>
                <option value="1" id="DVD" class="options">DVD</option>
                <option value="2" id="Furniture" class="options">Furniture</option>
                <option value="3" id="Book" class="options">Book</option>
                
                </select>

                <!-- Individual type forms -->

                <div id="typeforms">

                     <div id="dvd" style="display:none"  class="types">

                        <label>Size(MB):</label><br>
                        <input  name="Size" id="Size"  value="" autocomplete="off" type="number" ><br>
                        <label class="helpinfo">Data within the DVDs will not be read</label>

                    </div> 

                    <div id="furniture" style="display:none" class="types">

                        <label>Height(CM):</label>
                        <input  name="Height" id="Height"  value="" autocomplete="off" type="number" >
                        <label>width(CM):</label>
                        <input  name="width" id="width" value="" autocomplete="off" type="number" >
                        <label>Lenth(CM):</label>
                        <input  name="Lenth" id="Lenth"  value="" autocomplete="off" type="number" ><br>
                        <label class="helpinfo">Please provide the info in centimeters only</label>

                    </div>

                    <div id="book" style="display:none" class="types">

                        <label>Weight(KG):</label>
                        <input  name="Weight" id="Weight"  value="" autocomplete="off" type="number" ><br>
                        <label class="helpinfo">Only metric measurements will be accepted</label>
                    </div>
                </div>
                
               
               </form>
        </div>
        

    </div>
    <div id="footer">
        <h5 id="footertext">Scandiweb test-Gabriel Valadão Santos</h5>
    </div>

    

</body>