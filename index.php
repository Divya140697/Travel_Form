<?php

$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server,$username, $password);

if(!$con){
    die("Connection to this database is failed due to". mysqli_connect-error());
}
echo "Success connecting to the db";


?>