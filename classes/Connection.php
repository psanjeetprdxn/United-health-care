<?php
class Connection
{
    private $dbusername = 'root';
    private $dbpassword = 'root';
    private $dbhost = 'localhost';
    private $dbname = 'uhc';
    protected $conn;
    public function connect()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=uhc', $this->dbusername, $this->dbpassword);
            $this->conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
            return $this->conn;
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
