<?php
//This is the experimental version of the crispyengine
//be cautious, fools dare not tread here

date_default_timezone_set('America/Chicago');

function idsystem(){
  echo getcwd();

}


function localcontent(){
    //enginelog: date formatting cannot have slashes for some reason when calling the img file
    //resolved by changing date formatting to dots, ie m.d.y.jpg and m.d.y.html
    $date = ''.date(m).".".date(d).".".date(y).'';
    //$date is the date, duh
    //this shows the image on the homepage:
    echo "<img src='$date.jpg'>";
    //enginelog: $newpage did not have a definition for both $previousdate and $nextdate, so I moved it below the nav section
    //and it found those definitions, which seem to remain static on the archived pages

    echo "</br>";
    //This section takes a text file that accompanies the image file and parses it for the title and info (ie a blog post or description of the image)
    //interesting note, since this text is being echoed into a php file it can contain html formatting for font size and color and such
      $wholeinfo = file_get_contents("$date.txt");
      //Title parser
      $titlestart = strpos($wholeinfo, "Title:") + 6;
      $titlefinish = strpos($wholeinfo, "Date") ;
      $titlelength = $titlefinish - $titlestart;
      $titlestring = substr($wholeinfo, $titlestart, $titlelength);
      $formattedtitlestring = "<h1> $titlestring </h1>";
      echo $formattedtitlestring;
      echo "</br>";
      //Info parser
      $infostart = strpos($wholeinfo, "Info:") + 5;
      $infofinish = strpos($wholeinfo, "END") - 3;
      $infolength = $infofinish - $infostart;
      $infostring = substr($wholeinfo, $infostart, $infolength);
      echo $infostring;
      echo "</br>";









}
?>
