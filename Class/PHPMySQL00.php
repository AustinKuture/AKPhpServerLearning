<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB00";

$conet = new mysqli($servername,$username,$password,$dbname);

if ($conet->connect_error){

    echo "<br>Connet Failed";
}

//$sql = "CREATE TABLE MyGusts(
//
//       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//       firstname VARCHAR(30) NOT NULL ,
//       lastname VARCHAR(30) NOT NULL ,
//       email VARCHAR(50),
//       reg_date TIMESTAMP
//)";
//
//if ($conet->query($sql) == TRUE){
//
//    echo "<br>Success";
//}else{
//
//    echo "<br>Failed:".$conet->error;
//}
//
//$conet->close();


$conet = new mysqli($servername,$username,$password,$dbname);
$creatTable  = "CREATE TABLE iOS_User(
    
    id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    firstname VARCHAR (30) NOT NULL ,
    lastname VARCHAR (30) NOT NULL ,
    email VARCHAR (50),
    reg_data TIMESTAMP 
    )";

if ($conet->query($creatTable) == TRUE){

    echo "<br>You have Created a table:".$conet->info;
}else{

    echo "<br>Created Failed:".$conet->error;
}