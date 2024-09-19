<?php

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    class DbConnection{
        private $servername;
        private $username;
        private $password;
        private DbConnection $instance = null;

        private function __construct($servername,$username,$password){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
        }

        if (!$instance) {
            return new $instance;
        }



    }
?>
