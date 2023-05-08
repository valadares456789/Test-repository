<?php
require_once('Con_class.php');

class querylist_class extends Con_class
{

    public function prod_query()
    {
        $sqlquery1 = "SELECT * FROM products ";
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
                    <u class="pen">' .$rows1['prod_LENGTH'].  '</u> 
                    <u class="pen">' .$rows1['prod_HEIGHT'].  '</u> 
                    <u class="pen">' .$rows1['prod_WIDTH'].  '</u> 
                    <u class="pen">' .$rows1['prod_WEIGHT'].  '</u>

                </div>
            </div>';
           
        }

    }


}