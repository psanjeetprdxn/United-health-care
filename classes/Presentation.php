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

    /*
    *******************************************************************
        Returns presentation details of particular presentation id
    *******************************************************************
    */
    public function getPresentationById($presentation_id)
    {
      $presentation = array();
      $updateQuery = "SELECT * from presentation where presentation_id = ?";
      $update = $this->conn->prepare($updateQuery);
      $update->execute([$presentation_id]);
      if ($update) {
        $presentation = $update->fetch();
      }
      return $presentation;
    }
}
