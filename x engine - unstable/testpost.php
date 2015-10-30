<?php



$date =  $_POST["date"];
$title = $_POST["title"];
$info = $_POST["title"];
//$image = $_POST("pathtoimg");
$openpost = fopen("$date.txt", w);

$postcontent = "Title: $title \nDate: $date\n Info: $info \nEND";

fwrite($openpost, $postcontent);
echo 'thank you, your post has been recorded and will be published on the date you chose';
//echo "<img src=$image>" ;





?>
