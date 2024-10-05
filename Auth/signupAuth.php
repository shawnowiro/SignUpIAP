<?php
require("../load.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $First_name = $_POST['FirstName'];
    $Last_name = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Username = $_POST['Username'];
    $Phone_number = $_POST['Phone'];
    $ObjDb->getInstance();
    $ObjDb->insert($First_name, $Last_name, $Phone_number, $Email, $password);

}
?>