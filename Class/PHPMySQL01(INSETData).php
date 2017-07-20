<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB00";

$conet = new mysqli($servername,$username,$password,$dbname);

if ($conet->connect_error){

    echo "<br>Error:".$conet->connect_error;
}else{

    echo "Linker Success";
}

$sql = "INSERT INTO MyGusts('firstname','lastname','email'') VALUES ('Austin','Kuture','austinkuture@126.com')";

if ($conet->query($sql) == TRUE){

    echo "<br>Insert Success";
}else{

    echo "<br>Insert Error:".$conet->error;
}

