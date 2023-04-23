<?php



class Con_class
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database_name = "producstest";

    protected function concexecution()
    {
        $datab = 'mysql:host=' .$this -> host. '; dbname=' . $this -> database_name;
        $pdo = new PDO( $datab, $this -> user, $this -> password );
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;

    }
}