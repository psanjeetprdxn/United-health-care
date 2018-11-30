<?php
session_start();
class Users extends Connection
{
    protected $conn;
    public function __construct()
    {
        $connection = new Connection();
        $this->conn = $connection->connect();
    }
    /*
    ****************************************
          REGISTRATION FOR NEW USERS
    ****************************************
    */
    public function register(string $name, string $email, string $password)
    {
        $isSignup = false;
        $signup_query = "INSERT INTO users(name, email, password) values(?, ?, ?)";
        $signup = $this->conn->prepare($signup_query);
        $signup->execute([$name, $email, md5($password)]);
        if ($signup) {
            $isSignup = true;
        }
        return $isSignup;
    }
    /*
    ****************************************
          LOGIN FOR REGISTERED USERS
    ****************************************
    */
    public function login(string $email, string $password)
    {
        $isLogin = false;
        $login_query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $login = $this->conn->prepare($login_query);
        $login->execute([$email, md5($password)]);
        if ($login->rowCount() > 0) {
            $row = $login->fetch();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            $isLogin = true;
        }
        return $isLogin;
    }
    
}
