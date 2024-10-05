<?php
require("load.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $First_name = $_POST['fullname'];
    $Last_name = $_POST['fullname'];
    $Email = $_POST['email_address'];
    $username = $_POST['username'];
    $Phone_number = $_POST['phone'];
    $ObjDb->insert($First_name, $Last_name, $Phone_number, $Email, $password);

}
?>