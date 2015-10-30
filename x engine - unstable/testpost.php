<?php
echo '<link rel="stylesheet" href="S4W.css">';
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
$image = $_FILE['comic'];


$openpost = fopen("$date.txt", w);
$postcontent = "Title: $title\nDate:$date\nInfo:$info\nNext Post:$nextpost\nEND";
fwrite($openpost, $postcontent);
fclose('$date.txt');
$target_dir = getcwd();
$target_file = $target_dir . basename($_FILES["comic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

echo 'thank you, your post has been recorded and will be published on the date you provided';


echo "</body>";


?>
