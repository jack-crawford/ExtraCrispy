<?php
echo '<link rel="stylesheet" href="ec.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> publisher portal </h1>';
echo "<title>pub portal</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';

include 'Xengine.php';

echo "<h1> Please ensure that all dates are month.day.year </h1>";

echo "<form action='testpost.php' method='post'>
Date of Post: <br><input type='text' name='date'><br>
Title: <br><input type='text' name='title'><br>
Info: <br><input type='text' name='info' id='infobox'><br>
Next Post: <br><input type='text' name='nextpost'><br>
<br>
<input type='submit'>";



//Path to Post: <br><input type='text' name='pathtoimg'><br>




?>
