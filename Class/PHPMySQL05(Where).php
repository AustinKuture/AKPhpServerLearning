<?php
/**
 * Created by PhpStorm.
 * User: Kuture
 * Date: 2017/7/20
 * Time: 13:22
 */

//$conn = mysqli_connect("127.0.0.1","root","","myDB00");
//
//if (mysqli_connect_error()){
//
//    die("连接错误 : ".mysqli_connect_error());
//}
//
//$result = mysqli_query($conn,"SELECT * FROM MyGusts WHERE firstname='Li'");
//
//
//while ($row = mysqli_fetch_array($result)){
//
//    echo "<br>"."ID : ".$row["id"]." FirstName : ".$row["firstname"]."LastName : ".$row["lastname"]." Email : ".$row["email"]."<br>";
//}


$conn = mysqli_connect("localhost","root","","myDB00");

if (mysqli_connect_error()){

    die("Failed : ".mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM MyGusts WHERE lastname='Kuture'");

while ($row = mysqli_fetch_array($result)){

    echo "<br>";

    echo "ID : ".$row["id"]." FirstName : ".$row["firstname"]." LastName : ".$row["lastname"]." Email : ".$row["email"]."<br>";
}




































