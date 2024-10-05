<?php
    require('Structure/Layout.php');
    require('form.php');
    require('Dbconnection/dbconnection.php');

    $db= "userdb";
    $ObjLayouts = new Layout();
    $ObjForms = new forms();
    $ObjDb = new DbConnection($servername,$username,$password,$db);

?>