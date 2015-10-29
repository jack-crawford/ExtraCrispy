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
Name: <input type='text' name='name'><br>
E-mail: <input type='text' name='email'><br><input type='file' name='newcomic'><br>
<input type='submit'>";










?>
