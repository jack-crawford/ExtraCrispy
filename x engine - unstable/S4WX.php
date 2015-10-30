<?php
//html code below here:
echo '<link rel="stylesheet" href="S4W.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> sheepforwheat X</h1>';
echo '<h2 style="text-align: center"> a webcomic publishing system</h2>';
echo "<title> sheepforwheat X</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';

date_default_timezone_set('America/Chicago');

include 'Xengine.php';

localcontent();

echo "<div id='otherlinks'>";
echo "<h3>";
echo "</br>";
echo "<a href='pubportalX.php' class='button'><img src='portal.gif' height='50' width='50'></a>";
echo "</br>";
echo "</h3>";
echo "</div>";

echo '</body>';

?>
