<?php



class DbConnection{
    protected $servername;
    protected $username;
    protected $password;
    protected $db;
    private static $instance = null;
    private $connection;

    public function __construct($servername,$username,$password,$db){
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;
        $this->connection = new mysqli($servername, $username, $password,$db);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }


    }

    public static function getInstance(){
        if (!DbConnection::$instance) {
            DbConnection::$instance = new DbConnection($servername,$username,$password,$db);
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
