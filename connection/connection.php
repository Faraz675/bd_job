<?php

global $connect;

$server_name    = "localhost";
$user           = "root";
$password       = "";
$database       = "bd_job";


$connect        =  new mysqli($server_name, $user, $password, $database);

if($connect->connect_error){
    echo $connect->connect_error;
    exit;
}
?>