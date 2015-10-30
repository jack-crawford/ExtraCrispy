<?php



$date =  $_POST["date"];
$title = $_POST["title"];
$info = $_POST["info"];
//$image = $_POST("test");
$openpost = fopen("$date.txt", w);

$postcontent = "Title: $title \nDate: $date\n Info: $info \nEND";
//echo $image;
fwrite($openpost, $postcontent);
echo 'thank you, your post has been recorded and will be published on the date you provided';
//echo "<img src=$image>" ;





?>
