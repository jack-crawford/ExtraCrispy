<?php

//This is the experimental version of the crispyengine
//be cautious, fools dare not tread here

date_default_timezone_set('America/Chicago');



$date = ''.date(m).".".date(d).".".date(y).'';


function localcontent(){
      //enginelog: date formatting cannot have slashes for some reason when calling the img file
      //resolved by changing date formatting to dots, ie m.d.y.jpg and m.d.y.html
      $date = ''.date(m).".".date(d).".".date(y).'';
      //$date is the date, duh
      //this shows the image on the homepage:
      $image = "<img src='$date.jpg' width='75%'>";
      echo $image;
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
      $infofinish = strpos($wholeinfo, "Next");
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

      $wholeinfo = file_get_contents("$date.txt");
      $nextpoststart = strpos($wholeinfo, "Post:") + 5;
      $nextpostend = strpos($wholeinfo, "END");
      $nextpostlength = $nextpostend - $nextpoststart;
      $nextpost = substr($wholeinfo, $nextpoststart, $nextpostlength);
      $nextbutton = "<a href='$nextpost.html' class='button'>Next</a>";


//        /\            | |   (_)            / _|         | |
//       /  \   _ __ ___| |__  ___   _____  | |_ ___  __ _| |_ _   _ _ __ ___
//      / /\ \ | '__/ __| '_ \| \ \ / / _ \ |  _/ _ \/ _` | __| | | | '__/ _ \
//     / ____ \| | | (__| | | | |\ V /  __/ | ||  __/ (_| | |_| |_| | | |  __/
//    /_/    \_\_|  \___|_| |_|_| \_/ \___| |_| \___|\__,_|\__|\__,_|_|  \___|


      //$newpage and fwrite are the generation of archived pages
      //change archive from writing today's page to writing last post's page
      $lastimage = "<img src='$lastpost.jpg' width='75%'>";
      $lastwholeinfo = file_get_contents("$lastpost.txt");
      //Title parser
      $lastitlestart = strpos($lastwholeinfo, "Title:") + 6;
      $lastitlefinish = strpos($lastwholeinfo, "Date") ;
      $lastitlelength = $lastitlefinish - $lastitlestart;
      $lastitlestring = substr($lastwholeinfo, $lastitlestart, $lastitlelength);
      $lastformattedtitlestring = "<h1> $lastitlestring </h1>";
      //Info parser
      $lastinfostart = strpos($lastwholeinfo, "Info:") + 5;
      $lastinfofinish = strpos($lastwholeinfo, "Next");
      $lastinfolength = $lastinfofinish - $lastinfostart;
      $lastinfostring = substr($lastwholeinfo, $lastinfostart, $lastinfolength);


      //write previous button as two posts ago
      if ($lastpost == $date) {
        echo "</br>";
        $lastpost = substr($log, -18, 8);
        $doublelastpost = substr($log, -27, 8);
        $doublepreviousbutton = "<a href='$doublelastpost.html' class='button'>Previous</a>";

      }
      else {
        $doublelastpost = substr($log, -27, 8);
        $doublepreviousbutton = "<a href='$doublelastpost.html' class='button'>Previous</a>";
      }
      //write next button as todays post
      $lastnextbutton = "<a href='$date.html' class='button'> Next </a>";

      $newpage = fopen("$lastpost.html", w);
      fwrite($newpage, "<html><link rel='stylesheet' href='ec.css'><div id='body1'>
      <h1 style='text-align: center'> archived content for $lastpost </h1> <title>extracrispy</title>
      </br></div><body id='body2'>$lastimage</br> $lastformattedtitlestring </br> $lastinfostring </br> $doublepreviousbutton $homebutton $lastnextbutton </br>
      </body></html>");
      fclose("$lastpost.html");
}

?>
