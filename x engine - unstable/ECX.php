<?php
//html code below here:
echo '<link rel="stylesheet" href="ec.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> extracrispy X</h1>';
echo "<title> extracrispy X</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';

date_default_timezone_set('America/Chicago');

include 'Xengine.php';

localcontent();

echo "</br>";
echo "<a href='pubportalX.php' class='button'> publisher portal </a>";
echo "</br>";
echo "<a href='othercomics.php' class='button'> other comics </a>";

echo '</body>';

?>
