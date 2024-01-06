<?php
$server = 'localhost';
$user ="root";
$database_name ='mayscraft';
$password="";

$conn = new mysqli($server, $user, $password, $database_name);
if(!$conn){
 echo "Unable to connect tp database". $conn->connect_error;
}