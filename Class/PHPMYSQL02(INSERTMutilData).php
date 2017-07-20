<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB00";

//Linker


$conet = new mysqli($servername,$username,$password,$dbname);


//$sql = "INSERT INTO MyGusts (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com');";
//$sql .= "INSERT INTO MyGusts (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com');";
//$sql .= "INSERT INTO MyGusts (firstname, lastname, email)
//VALUES ('Julie', 'Dooley', 'julie@example.com')";
//
//if ($conet->multi_query($sql) === TRUE) {
//    echo "新记录插入成功";
//} else {
//    echo "Error: " . $sql . "<br>" . $conet->error;
//}
//
//$conet->close();


$sql = "INSERT INTO MyGusts (firstname,lastname,email) VALUES ('Li','Yakun','li.yakun@kuture.com.cn');";
$sql .= "INSERT INTO MyGusts (firstname,lastname,email) VALUES ('fu','yanni','fu.yanni@kuture.com.cn');";
$sql .= "INSERT INTO MyGusts (firstname,lastname,email) VALUES ('yang','haichao','yang.haichao@kuture.com.cn');";
$sql .= "INSERT INTO MyGusts (firstname,lastname,email) VALUES ('du','yang','du.yang@kuture.com.cn');";
$sql .= "INSERT INTO MyGusts (firstname,lastname,email) VALUES ('Austin','Kuture','austinkuture@126.com');";

if ($conet->multi_query($sql) === TRUE){

    echo "数据插入成功";
}else{

    echo "插入失败:".$conet->error;
}


//if ($conet->connect_error){
//
//    echo "<br>Linker Failed:".$conet->connect_error;
//}else{
//
//    echo "<br>Linker Success";
//}
//
//for ($i = 0;$i<10;$i++){
//
//
//    $sql = "INSERT INTO MyGusts(firstname,lastname,email) VALUES ('Fu付','Yani燕妮','fu.yanni@kuture.com.$i');";
//
////    $sql .= "INSERT INTO MYGusts(firstname,lastname,email) VALUES ('杨','海超','yang.haichao@kuture.com');";
////
////    $sql .= "INSERT INTO MYGusts(firstname,lastname,email) VALUES ('李','亚坤','Kuture@kuture.com');";
//
//    if ($conet->query($sql) == TRUE){
//
//        echo "<br>INSERT Success";
//    }else{
//
//        echo "<br>INSERT Failed:".$conet->error;
//    }
//
//}

