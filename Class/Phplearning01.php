<?php

$files = fopen("world.txt","r") or exit("Can not Open");

while (!feof($files)){

    echo "<br>".fgetc($files)."<br>";
}

fclose($files);

?>

