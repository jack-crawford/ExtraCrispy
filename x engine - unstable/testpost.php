<?php



$date =  $_POST["date"];
$title = $_POST["title"];
$info = $_POST["title"];

$openpost = fopen("$date.txt", w);

$postcontent = "Title: $title \nDate: $date\n Info: $info \nEND";

fwrite($openpost, $postcontent);
echo $_POST["title"];
echo "</br>";
echo $_POST["email"];
echo "</br>";
$image = $_POST["newcomic"];
echo "<img src=$image>" ;





?>
