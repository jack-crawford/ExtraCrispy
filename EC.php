<?php
//html code below here:
echo '<link rel="stylesheet" href="ec.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> welcome to extracrispy </h1>';
echo "<title> extracrispy </title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';

date_default_timezone_set('America/Chicago');

//When/If Mother asks, delete the // that makes the line below a comment, to show Othello without Drive
//echo "<iframe src='https://drive.google.com/a/hollandhall.org/file/d/0B5XJOoJLCrT_dm9pUTNpT3BadDg/preview' width='640' height='480'></iframe>";

//include crispyengine and othercomics functions
//found bug that crashed EC, narrowed source down to crispyengine
//FOUND THE BUGGER AND DELETED IT WITH EXTREME PREDJUDICE
//For some reason, localcontent() was duplicated. No longer. 
include 'crispyengine.php';
include 'othercomics.php';

//content creation
function comicreader() {
    $weekday = date('D');
if ($weekday === "Mon") {
    echo "it's monday, time for xkcd!";
    xkcd();
}

if ($weekday === "Wed") {
    echo "it's wednesday, time for xkcd!";
    xkcd();
}

if ($weekday === "Fri") {
    echo "it's friday, time for xkcd!";
    xkcd();
}

if ($weekday === "Tue") {
    echo "it's tuesday, time for NIH!";
    NIH();
}

if ($weekday === "Thu") {
    echo "it's thursday, time for NIH!";
    NIH();
}
}



//content publishing
comicreader();
echo "</br>";
localcontent();
echo "</br>";


echo '</body>';

?>
