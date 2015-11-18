<?php
date_default_timezone_set('America/Chicago');

include 'cheatsheat.php';

$x = 1;
$cyc = 1;


echo "Add days off: <form action='schedule.php' method='post'><input type='text' name='dayoff' />  <input type='submit' /> </form> ";
array_push($_POST['dayoff']);
$offdays = array('11.25.15','11.26.15','11.27.15');



while ($x <= 30):
  //if it's a weekend, skip
  if (date('D' , strtotime("+ $x day")) === "Sun" or date('D' , strtotime("+ $x day")) === "Sat"){
    $x = $x + 1;
  } elseif (in_array(date('m.d.y', strtotime("+ $x day")), $offdays)) {
    $x = $x + 1;
  } else {
    //if it's a weekday, echo it.
    echo date('l F d ', strtotime("+ $x day"));
      if ($cyc == 1) {
        echo "- A Day ";
        $cyc = $cyc + 1;
      }
      elseif ($cyc == 2) {
        echo "- B Day ";
        $cyc = $cyc + 1;
      }
      elseif ($cyc == 3) {
        echo "- C Day ";
        $cyc = $cyc + 1;
      }
      elseif ($cyc == 4) {
        echo "- D Day, Short Classes ";
        $cyc = $cyc + 1;
      }
      elseif ($cyc == 5) {
        echo "- E Day ";
        $cyc = $cyc + 1;
      }
      elseif ($cyc == 6) {
        echo "- F Day ";
        $cyc = 1;
      }

echo $b;
$x = $x + 1;

}
endwhile;


?>
