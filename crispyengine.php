<?php

//welcome to the crispyengine
//this is where we store the important code for EC
//please wear a hard hat

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




    //NAV
    //goal is to create buttons that take you to previous and next days' content by altering
    //$date and giving it to links
    //enginelog: $previousday is successful on newly created archive pages as well as the home page

    $currentday = (int)substr($date, 3,2);
    $previousday = $currentday - 1;
    $previousdate = ''.substr($date, 0,2).'.'.$previousday.'.'.substr($date, -2);
    echo "</br>";


    //now let's try $nextday
    $nextday = $currentday + 1;
    $nextdate = ''.substr($date, 0,2).'.'.$nextday.'.'.substr($date, -2);
    echo "     ";
    //these are the buttons
    $previousbutton = "<a href='$previousdate.html' class='button'>Previous</a>";
    $nextbutton = "<a href='$nextdate.html' class='button'>Next</a>";
    $homebutton = "<a href='EC.php' class='button'>Home</a>";
    //on the homepage only the previousbutton needs to be shown
    echo $previousbutton;

    //$newpage and fwrite are the generation of archived pages
    $newpage = fopen("$date.html", w);
    fwrite($newpage, "<html><link rel='stylesheet' href='ec.css'><div id='body1'>
    <h1 style='text-align: center'> archived content for $date </h1> <title>extracrispy</title>
    </br></div><body id='body2'><img src='$date.jpg'></br> $formattedtitlestring </br> $infostring </br> $previousbutton $homebutton $nextbutton </br>
    </body></html>");
    fclose("$date.html");
    //new bug - previous post glitches when the previous post wasn't the day before
    //solution: posts are numbered by post and not by date in nav system
    //$postid = //number of posts in folder?
}


?>
