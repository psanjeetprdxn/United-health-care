<?php

class Presentation extends Connection
{
    protected $conn;
    public function __construct()
    {
        $connection = new Connection;
        $this->conn = $connection->connect();
    }

    /*
    *************************************************************************************************************************
         RETURNS PRESENTAION DETAILS FROM PRESENTAION TABLE IN MULTIDIMENSIONAL ARRAY (NAME, CLIENT NAME, STATUS, ETC)
    *************************************************************************************************************************
    */

    public function getPresentation()
    {
        $presentations = array();
        $presentationQuery = "SELECT * FROM presentation";
        $presentation = $this->conn->query($presentationQuery);
        $presentations = $presentation->fetchAll();
        return $presentations;
    }
}


?>
