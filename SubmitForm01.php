<?php

$name = $email = $website = $gender = $coment = "";

$name = tirmVarible($_POST['fname']);
$email = tirmVarible($_POST['femail']);
$website = tirmVarible($_POST['website']);
$gender = tirmVarible($_POST['gender']);
$coment = tirmVarible($_POST['coment']);

function tirmVarible($data){

    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

echo "<br>";
echo "<br>Name : $name <br>";
echo "<br>Email : $email <br>";
echo "<br>Website : $website <br>";
echo "<br>Gender : $gender <br>";
echo "<br>Coment : $coment <br>";

?>