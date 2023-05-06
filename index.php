<?php
require_once('CLASSES/querylist_class.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/index.css?<?php echo time(); ?>">
    <title>index page</title>
</head>

<body>

    <div id="title">
        
        <h1  id="titletext">Product list</h1>
        <a href="HTML/form.php" id="add-product-bnt" >
                add
        </a>
        <input form="list_form" type="submit" value="delete" id="save-product-bnt" >
        </input>
    </div>
    <!--Item scroll-->
     <div  class="scroll"> 
    <form action="CLASSES/delete_query.php" id="list_form" method="POST" class="scroll">
        <?php
            $list = new querylist_class();
             $list->prod_query();
        ?>
        </form>
     </div> 
        <div id="footer">
                <div id="footertext">Scandiweb test-Gabriel Valadão Santos</div>
        </div>
</body>