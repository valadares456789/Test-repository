<?php
if(isset($_POST['submit']))
{

    require_once('Con_class.php');
    
    class insertquery_form_class extends Con_class
    {
        
        public function insert_form_class($SKU, $name, $size, $Price, $height, $width, 
        $lenth, $weight, $productTypes)
        
        {
            $sqlquery1 = "SELECT COUNT(*) FROM products WHERE prod_SDK=$SKU";
            $stament1 = $this -> concexecution()->query($sqlquery1);
            $rows1 = $stament1-> fetchColumn();
        //     $sqlquery2 = "SELECT * FROM products";
        //     $stament2 = $this -> concexecution()->query($sqlquery2);
          
        //     echo $rows1;
        //     echo '<br>sku'.$SKU;
        //     while ($rows2 = $stament2-> fetch())
        // {
        //     echo '<br>'.$rows2['prod_SDK'];
        // }
    

        if ($rows1 == 0) 
        {
            if ($productTypes > 0 && ($size <> '' || ($height <> '' && $width <> '' && $lenth <> ''  ) || $weight <> '' ))
            {
                $sqlquery = "INSERT INTO `products` (`prod_SDK`, 
                `prod_NAME`, `prod_PRICE`, `prod_SIZE`, `prod_HEIGHT`, `prod_WIDTH`, 
                `prod_LENGTH`, `prod_WEIGHT`,  `prod_TYPE`) 
                VALUES  (?,?,?,COALESCE(?, DEFAULT(prod_SIZE)),COALESCE(?, DEFAULT(prod_HEIGHT)),
                COALESCE(?, DEFAULT(prod_WIDTH)),COALESCE(?, DEFAULT(prod_LENGTH)),COALESCE(?, DEFAULT(prod_WEIGHT)),?);";
                $stament = $this -> concexecution()->prepare($sqlquery);
                $stament -> execute([$SKU, $name, $Price, $size, $height, $width, 
                $lenth, $weight, $productTypes]);
            }
           
            else 
            {
            echo '<script language="javascript">';
            echo 'alert("Please fill product type relate info.")';
            echo '</script>';
            // header("Location:../HTML/form.html");
            }
        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("SKU already exists, please insert a diferent one.")';
            echo '</script>';
        }
        }

        
    }



    $deleteing = new insertquery_form_class();
$deleteing->insert_form_class($_POST['SKU'], $_POST['Name'], 
                        $_POST['Size'], $_POST['Price'],
                      $_POST['Height'], $_POST['width'],
                       $_POST['Lenth'], $_POST['Weight'], $_POST['productTypes']);
}
