<?php


$servername = "localhost";
$username = "root";
$password = "";

$conet = new mysqli($servername,$username,$password);
if ($conet -> connect_error){

    die("Failed:".$conet->connect_error);
}

echo "Success";


