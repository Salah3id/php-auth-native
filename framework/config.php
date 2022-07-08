<?php

function dbconnect ()
{
    $hostname="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="makanco";
    
    $connection=@mysqli_connect($hostname,$dbusername,$dbpassword,$dbname) or die("Database Connection Error");
    return $connection;
}


$con=dbconnect();

?>