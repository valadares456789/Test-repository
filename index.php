<?php
require_once('CLASSES/querylist_class.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <title>index page</title>
</head>

<body>

    <div id="title">
        
        <h1  id="titletext">Product list</h1>
        <a href="HTML/form.html" id="add-product-bnt" >
                add
        </a>
        <a href="" id="delete-product-bnt" >
               Delete itens
        </a>
    </div>
    <!--Item scroll-->
    <div class="scroll">
        <?php
            $list = new querylist_class();
            echo $list->prod_query();
        ?>
    </div>
        <div id="footer">
                <h5 id="footertext">Scandiweb test-Gabriel Valadão Santos</h5>
        </div>

    <script src="../JAVASCRIPT/controle.js"></script>
</body>