<?php
echo '<link rel="stylesheet" href="ec.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> publisher portal </h1>';
echo "<title>pub portal</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';


$date =  $_POST["date"];
$title = $_POST["title"];
$info = $_POST["info"];
$nextpost = $_POST["nextpost"];
//$image = $_POST("test");
$openpost = fopen("$date.txt", w);

$postcontent = "Title: $title\nDate:$date\nInfo:$info\nNext Post:$nextpost\nEND";
//echo $image;
fwrite($openpost, $postcontent);
echo 'thank you, your post has been recorded and will be published on the date you provided';
//echo "<img src=$image>" ;


echo "</body>";


?>
