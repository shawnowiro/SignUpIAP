<?php
    require('Structure/Layout.php');
    require('form.php');
    require('Dbconnection/dbconnection.php');
    $servername = "localhost";
    $username = "root";
    $password = "Ochiengowiro37";
    $db= "userdb";
    $ObjLayouts = new Layout();
    $ObjForms = new forms();
    $ObjDb = new DbConnection($servername,$username,$password,$db);

?>