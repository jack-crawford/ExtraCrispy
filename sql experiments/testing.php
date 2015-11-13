<?php
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die('unable to connect to mysql: ' . mysql_error());

mysql_select_db($db_database)
  or die('unable to select database: ' . mysql_error());

$query = "SELECT * FROM classics";
$result = mysql_query($query);

if(!$result) die ('database access failed: . ' . mysql_error());

$rows = mysql_num_rows($result);

for ($j = 0; $j < $rows ; ++$j)
{
  $row = mysql_fetch_row($result);
  echo 'Author: ' . $row[0] . "</br>";
  echo 'Title: ' . $row[1] . "</br>";
  echo 'Year: ' . $row[2] . "</br>";
}
function get_post($var){
  return mysql_real_escape_string($_POST[$var]);
}
if (isset($_POST['author']) &&
    isset($_POST['title']) &&
    isset($_POST['year']) &&
    )
    {
      $author = get_post('author');
      $title = get_post('title');
      $year = get_post('year');
      $query = "INSERT INTO classics VALUES" . "('$author', '$title', '$year')";

      if (!mysql_query($query, $db_server))
        echo "INSERT failed: $query '</br>'" . mysql_error();
    }
echo <<<_END
<form action="sqltest.php" method="post"><pre>
Author <input type="text" name="author" />
Title <input type="text" name="title" />
Year <input type="text" name="year" />
<input type="submit" value="ADD RECORD" />
</pre> </form>
_END;

$query = "SELECT * FROM classics";

$result =






mysql_close($db_server);
?>
