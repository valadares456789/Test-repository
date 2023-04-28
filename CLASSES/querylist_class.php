<?php
require_once('Con_class.php');
class querylist_class extends Con_class
{

    public function prod_query()
    {
        $sqlquery = "SELECT * FROM products";
        $stament = $this -> concexecution()->query($sqlquery);
        while ($row = $stament-> fetch())
        {
            echo '<div class="itens" >
                <input type="checkbox" name="delete-checkbox[]" value="'.$row['prod_ID'].'" class="delete-checkbox">
                <div class="sectionone">
                    
                    <u class="pen">' .$row['prod_SDK']. '</u>
                    <u class="pen">' .$row['prod_NAME'].  '</u>
                    <u class="pen">' .$row['prod_PRICE'].  '</u>
                    <u class="pen">' .$row['prod_WEIGHT'].  '</u>
                    <u class="pen">' .$row['prod_HEIGHT'].  '</u>
                    <u class="pen">' .$row['prod_WIDTH'].  '</u>
                    <u class="pen">' .$row['prod_LENGTH'].  '</u>
                    <u class="pen">' .$row['prod_SIZE'].  '</u>

                </div>
            </div>';
           
        }



    }


}