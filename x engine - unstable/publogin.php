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
     // Only load the code below if the GET
     // variable 'login' is set. You will
     // set this when you submit the form

     if ($_POST['username'] == 'test'
         && $_POST['password'] == 'password') {
         // Load code below if both username
         // and password submitted are correct

         $_SESSION['loggedin'] = 1;
          // Set session variable

         header("Location: pubportalX.php");
         exit;
         // Redirect to a protected page

     } else echo "Incorrect login";
     // Otherwise, echo the error message

}
echo "Log in:
<form action='?login=1' method='post'>
Username: <input type='text' name='username' />
Password: <input type='password' name='password' />
<input type='submit' />:";
?>
