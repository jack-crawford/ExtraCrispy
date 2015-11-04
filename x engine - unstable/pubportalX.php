<?php
echo '<link rel="stylesheet" href="S4W.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> publisher portal </h1>';
echo "<title>publisher portal</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';

include 'Xengine.php';

echo "<h1> Please ensure that all dates are month.day.year </h1>";

echo "<form action='testpost.php' method='post'>
Name of Image File: <br><input type='text' name='path'><br>
Date of Post: <br><input type='text' name='date'><br>
Title: <br><input type='text' name='title'><br>
Info: <br><input type='text' name='info' id='infobox'><br>
Next Post: <br><input type='text' name='nextpost'><br>
<br>
<input type='submit'>";
echo "</br>";




?>
