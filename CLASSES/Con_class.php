<?php

namespace CLASSES\conn;



class Con_class


{

    // database connection variables
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database_name = "products";


    // database connection execution
    protected function concexecution()
    {
        try
        {
        $datab = 'mysql:host=' .$this -> host. '; dbname=' . $this -> database_name;
        $pdo = new PDO( $datab, $this -> user, $this -> password );
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
        }


        catch(PDOException $error)
        {
            echo "ERRO: ".$error->getMessage();
            $pdo = null;
        }

    }
   
}