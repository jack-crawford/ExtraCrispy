<?php

//This is the experimental version of the crispyengine
//be cautious, fools dare not tread here

date_default_timezone_set('America/Chicago');






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
    //for some reason, if there is no text file, it doesn't show anything on the page that would imply that there should be one
    //if there is no image, however, the little missing image icon pops up
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

      //x log system: writes date to log, and on archived pages creates previous button with link
      //to date before the current one. Problem is can't create next button.
      $log = file_get_contents("logpage.txt");
      $lastpost = substr($log, -9, 8);


      if ($lastpost == $date) {
        echo "</br>";
        $lastpost = substr($log, -18, 8);
        $previousbutton = "<a href='$lastpost.html' class='button'>Previous</a>";
        echo $previousbutton;
      }
      else {
        file_put_contents("logpage.txt", "$date\n", FILE_APPEND);
        $previousbutton = "<a href='$lastpost.html' class='button'>Previous</a>";
        echo $previousbutton;
      }

      $homebutton = "<a href='ECX.php' class='button'>Home</a>";
    }

//createarchive is generating the webpages with navigators. note: nextbutton is still not working.    
function createarchive(){
      //$newpage and fwrite are the generation of archived pages
      $newpage = fopen("$date.html", w);
      fwrite($newpage, "<html><link rel='stylesheet' href='ec.css'><div id='body1'>
      <h1 style='text-align: center'> archived content for $date </h1> <title>extracrispy</title>
      </br></div><body id='body2'><img src='$date.jpg'></br> $formattedtitlestring </br> $infostring </br> $previousbutton $homebutton $nextbutton </br>
      </body></html>");
      fclose("$date.html");
}




?>
