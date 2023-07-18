<?php
    $servername='localhost';
    $username='root';
    $password='';

    //connecting to databse
    try {
        $conn=new PDO("mysql:host=$servername;dbname=Inventory",$username,$password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (\Exception $e) {
        $error_message= $e->getMessage();
    }
?>