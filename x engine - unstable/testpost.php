<?php
echo '<link rel="stylesheet" href="S4W.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> publisher portal </h1>';
echo "<title>publisher portal</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';


$date =  $_POST["date"];
$title = $_POST["title"];
$info = $_POST["info"];
$nextpost = $_POST["nextpost"];
$pathtoimage = $_POST['path'];
$files = getcwd();
rename($pathtoimage, "$files/$date.jpg");
echo "Here's the Content of Your Post:"
echo "</br>";
echo "<img src='$date.jpg'>";



$openpost = fopen("$date.txt", w);
$postcontent = "Title: $title\nDate:$date\nInfo:$info\nNext Post:$nextpost\nEND";
fwrite($openpost, $postcontent);
fclose('$date.txt');


echo 'thank you, your post has been recorded and will be published on the date you provided';


echo "</body>";


?>
