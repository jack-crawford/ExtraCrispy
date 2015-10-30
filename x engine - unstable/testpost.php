<?php



$date =  $_POST["date"];
$title = $_POST["title"];
$info = $_POST["title"];
//$image = $_POST("pathtoimg");
$openpost = fopen("$date.txt", w);

$postcontent = "Title: $title \nDate: $date\n Info: $info \nEND";

fwrite($openpost, $postcontent);

//echo "<img src=$image>" ;





?>
