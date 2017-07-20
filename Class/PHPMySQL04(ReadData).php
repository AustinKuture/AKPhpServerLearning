<?php
/**
 * Created by PhpStorm.
 * User: Kuture
 * Date: 2017/7/19
 * Time: 13:22
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB00";
//
//// 创建连接
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("连接失败: " . $conn->connect_error);
//}
//
//$sql = "SELECT id, firstname, lastname FROM MyGusts";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // 输出数据
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 结果";
//}
//$conn->close();
//
//$conn = new mysqli($servername,$username,$password,$dbname);
//if ($conn->connect_error){
//
//    die("Connect failed:".$conn->connect_error);
//}
//
//$sql = "SELECT id, firstname, lastname FROM MYGusts";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0){
//
//    while ($row = $result->fetch_assoc()){
//
//        echo "id: " .$row["id"]."-Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
//    }
//}else{
//
//    echo "0 Result";
//}


$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){

    die("Conect failed: ".$conn->connect_error);
}

$sql = "SELECT id, firstname,lastname FROM MYGusts";

$result = $conn->query($sql);
if ($result->num_rows > 0){

    while ($row = $result->fetch_assoc()){

        echo  "<br>"."id : ".$row["id"]."  --Name: ".$row["firstname"]."LastName : ".$row["lastname"]."<br>";
    }
}else{

    echo "0 Result";
}





























