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

    /*
    **********************************************************
         DELETES PRESENTATION FROM PRESENTATION TABLE
    **********************************************************
    */
    public function deletePresentationById($presentation_id)
    {
        $isDeleted = false;
        $delete = $this->conn->prepare("DELETE FROM presentation where presentation_id = ?");
        $delete->execute([$presentation_id]);
        if ($delete) {
            $isDeleted = true;
        }
        return $isDeleted;
    }
}


?>
