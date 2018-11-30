<?php
class Validator extends Connection {
    protected $conn;
    public function __construct()
    {
        $dbConnection = new Connection();
        $this->conn = $dbConnection->connect();
    }
    /*
    ***********************************************
       CHECKS IF EMAIL IS (EMPTY & VALID) OR NOT
    ***********************************************
    */
    public function validateEmail($email)
    {
        $isValid = false;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isValid = true;
        }
        return $isValid;
    }
    /*
    ****************************************
      CHECKS IF EMAIL EXISTS IN DATABASE
    ****************************************
    */
    public function isEmailExists(string $email)
    {
        $isEmailExists = false;
        $emailQuery = "SELECT email FROM users WHERE email = ?";
        $fetchEmail = $this->conn->prepare($emailQuery);
        $fetchEmail->execute([$email]);
        if ($fetchEmail->rowCount() > 0) {
            $isEmailExists = true;
        }
        return $isEmailExists;
    }
}
