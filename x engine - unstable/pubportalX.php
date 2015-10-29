<?php
echo '<link rel="stylesheet" href="ec.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> publisher portal </h1>';
echo "<title>pub portal</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';

include 'Xengine.php';


echo "<form action='testpost.php' method='post'>
Date of Post: <input type='text' name='date'><br>
Title: <input type='text' name='title'><br>
: <input type='text' name='email'><br>
<br>
<input type='submit'>";










?>
