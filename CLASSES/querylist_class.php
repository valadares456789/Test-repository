<?php
require_once('Con_class.php');
class querylist_class extends Con_class
{

    public function prod_query()
    {
        $sqlquery1 = "SELECT * FROM products WHERE prod_TYPE='1'";
        $stament1 = $this -> concexecution()->query($sqlquery1);
        while ($rows1 = $stament1-> fetch())
        {
            echo '<div class="itens" >
                <input type="checkbox" name="delete-checkbox[]" value="'.$rows1['prod_ID'].'" class="delete-checkbox">
                <div class="sectionone">
                    
                    <u class="pen">' .$rows1['prod_SDK']. '</u>
                    <u class="pen">' .$rows1['prod_NAME'].  '</u>
                    <u class="pen">' .$rows1['prod_PRICE'].  '</u>
                    <u class="pen">' .$rows1['prod_SIZE'].  '</u>

                </div>
            </div>';
           
        }

        $sqlquery2 = "SELECT * FROM products WHERE prod_TYPE='2'";
        $stament2 = $this -> concexecution()->query($sqlquery2);
        while ($rows2 = $stament2-> fetch())
        {
            echo '<div class="itens" >
                <input type="checkbox" name="delete-checkbox[]" value="'.$rows2['prod_ID'].'" class="delete-checkbox">
                <div class="sectionone">
                    
                    <u class="pen">' .$rows2['prod_SDK']. '</u>
                    <u class="pen">' .$rows2['prod_NAME'].  '</u>
                    <u class="pen">' .$rows2['prod_PRICE'].  '</u>
                    <u class="pen">' .$rows2['prod_WEIGHT'].  '</u>

                </div>
            </div>';
           
        }


        $sqlquery3 = "SELECT * FROM products WHERE prod_TYPE='3'";
        $stament3 = $this -> concexecution()->query($sqlquery3);
        while ($rows3 = $stament3-> fetch())
        {
            echo '<div class="itens" >
                <input type="checkbox" name="delete-checkbox[]" value="'.$rows3['prod_ID'].'" class="delete-checkbox">
                <div class="sectionone">
                    
                    <u class="pen">' .$rows3['prod_SDK']. '</u>
                    <u class="pen">' .$rows3['prod_NAME'].  '</u>
                    <u class="pen">' .$rows3['prod_PRICE'].  '</u> <br>
                    <u class="pen">' .$rows3['prod_LENGTH'].  '</u> <br>
                    <u class="pen">' .$rows3['prod_HEIGHT'].  '</u> <br>
                    <u class="pen">' .$rows3['prod_WIDTH'].  '</u> <br>

                </div>
            </div>';
           
        }

        



    }


}