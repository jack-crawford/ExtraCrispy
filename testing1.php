<?php
//html code below here:
echo '<link rel="stylesheet" href="ecn.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> welcome to extracrispy </h1>';
echo "<title> extracrispy </title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';

//include crispyengine functions
include 'crispyengine.php';

//xkcd code below here:
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
echo '</body>';

?> 
