<?php
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connect at line 5" . mysql_error());

mysql_select_db($db_database, $db_server) or die("unable to connect at line 7 " . mysql_error());

if(isset($_POST['delete']) && isset($_POST['isbn']))
{
  $isbn = get_post('isbn');
  $query = "DELETE FROM classics WHERE isbn='$isbn'";

  if (!mysql_query($query, $db_server))
        echo "DELETE failed: $query</br>" . mysql_error() . "</br>";
}
if (isset($_POST['author']) &&
    isset($_POST['title']) &&
    isset($_POST['year']) &&
    isset($_POST['isbn']))
    {
      $author = get_post('author');
      $title = get_post('title');
      $year = get_post('year');
      $isbn = get_post('isbn');
      $query = "INSERT INTO classics VALUES" . "('$author', '$title', '$year', '$isbn')";

      if (!mysql_query($query, $db_server))
          echo "INSERT failed: $query " . $mysql_error;

    }

echo "<form action='testing.php' method='post'><pre> Author <input type='text' name='author' /> Title <input type='text' name='title' /> Year <input type='text' name='year' /> ISBN <input type='text' name='isbn' /> <input type='submit' value='ADD RECORD' /> </pre> </form>";

$query = "SELECT * FROM classics";
$result = mysql_query($query);

if(!$result) die ("database access failed line 38 " . mysql_error());
$rows = mysql_num_rows($result);
for ($j = 0; $j < $rows ; ++$j)
{
  $row = mysql_fetch_row($result);
  echo "<pre> Author $row[0] Title $row[1] Year $row[2] ISBN $row[3] </pre> <form action='testing.php' method='post'> <input type='hidden' name='delete' value='yes' /> <input type='hidden' name='isbn' value='$row[3]' /> <input type='submit' value='DELETE RECORD' /></form>";

}

mysql_close($db_server);
function get_post($var)
{
  return mysql_real_escape_string($_POST[$var]);
}




?>
