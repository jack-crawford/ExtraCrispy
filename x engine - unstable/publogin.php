<?php
echo '<link rel="stylesheet" href="S4W.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> publisher login </h1>';
echo "<title>pub login</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';
session_start();



if ($_GET['login']) {

     if ($_POST['username'] == 'creator'
         && $_POST['password'] == 'password') {
         // Load code below if both username
         // and password submitted are correct

         $_SESSION['loggedin'] = 1;
          // Set session variable

         echo "<a href='pubportalX.php'> Redirect here </a>";
         exit;
         // Redirect to a protected page

     } else echo "Incorrect login";
     // Otherwise, echo the error message

}
echo "
<form action='?login=1' method='post'>
<h3>Username:</h3> <input type='text' name='username' />
<h3>Password:</h3> <input type='password' name='password' /> </br> </br>
<input type='submit' />";
?>
