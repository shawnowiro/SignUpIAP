<?php



class DbConnection{
    public $servername = "localhost";
    public $username = "root";
    public $password = "Ochiengowiro37";    
    protected $db = "Userdb";
    private static $instance = null;
    private $connection;

    public function __construct(){
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }


    }

    public function getInstance(){
        if (!DbConnection::$instance) {
            DbConnection::$instance = new DbConnection();
        }
        return DbConnection::$instance;
    }

    public function insert($First_name, $Last_name,$Phone_number, $Email,$password){
        $sql = "INSERT INTO users (First_name, Last_name,Phone_number, Email,password) VALUES (?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("sssss", $First_name, $Last_name,$Phone_number,$Email,$password);
        
        if ($stmt->execute()) {
            echo "New record created successfully";
            header("Location: ../login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $stmt->error;
        }
        $stmt->close();
    }
}
