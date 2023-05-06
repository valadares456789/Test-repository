<?php
if(isset($_POST['delete-checkbox[]']))
{
    require_once('Con_class.php');
    class querydelete_class extends Con_class
    {
        public function delete_query($IDs)

        {

                $ID = implode(",",$IDs);
                $sqlquery = "DELETE FROM products WHERE prod_ID IN ($ID)";
                $stament = $this -> concexecution()->prepare($sqlquery);
                $stament -> execute();
                header("Location: ../index.php");
        }
    }
    $deleteing = new querydelete_class();
    $deleteing->delete_query($_POST['delete-checkbox']);

}

else
{
    header("Location: ../index.php");    
}
