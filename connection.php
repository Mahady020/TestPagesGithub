<?php
try {
    $dbname="mysql:host=localhost;dbname=turizm_herberi";
    $dbusername="root";
    $dbpassword="";

    $bdconnection= new PDO($dbname, $dbusername,$dbpassword);
    $bdconnection->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);

} catch (PDOException $e) {
    echo $e->getMessage();
}