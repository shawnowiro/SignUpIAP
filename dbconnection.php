<?php

$servername = "localhost";
$username = "username";
$password = "password";

class DbConnection{
    private $servername;
    private $username;
    private $password;
    private static $instance = null;
    private $connection;

    private function __construct($servername,$username,$password){
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->connection = new mysqli($servername, $username, $password);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        echo "Connected successfully";
    }

    public static function getInstance($servername,$username,$password){
        if (!DbConnection::$instance) {
            DbConnection::$instance = new DbConnection($servername,$username,$password);
        }
        return DbConnection::$instance;
    }

    public function insert($First_name, $Last_name,$Phone_number, $Email,$password){
        $sql = "INSERT INTO users (First_name, Last_name,Phone_number, Email,password) VALUES (?, ?, ?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("sssss", $First_name, $Last_name,$Phone_number,$Email,$password);
        
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $stmt->error;
        }
        $stmt->close();
    }
}
