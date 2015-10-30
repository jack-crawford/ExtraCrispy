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
$image = $_FILES['comic'];




$openpost = fopen("$date.txt", w);
$postcontent = "Title: $title\nDate:$date\nInfo:$info\nNext Post:$nextpost\nEND";
fwrite($openpost, $postcontent);
fclose('$date.txt');
$cwd = getcwd();
move_uploaded_file($image, $cwd);

echo 'thank you, your post has been recorded and will be published on the date you provided';


echo "</body>";


?>
