<?php

//welcome to the crispyengine
//this is where we store the functions that run EC's webcomic trawling features
//please wear a hard hat

//this crawls the comic Not Invented Here
function NIH() {
$NIH = file_get_contents("http://notinventedhe.re");
$b = "<br/>";
$Nstart = strpos($NIH, '<div id="comic-content">') ;
echo $b;
$Nfinish = strpos($NIH, '><div id="comic-nav">') ;
echo substr($NIH, 1507, 228);
}

//this crawls the comic xkcd
function xkcd() {
$xkcd = file_get_contents("http://www.xkcd.com");

$xstart = strpos($xkcd, '<div id="co') ;

$xfinish = strpos($xkcd, '/div', $xstart);
$xcomic = $xfinish - $xstart-1;


echo $b;
echo substr($xkcd, $xstart, $xcomic);

}

date_default_timezone_set('America/Chicago');



function localcontent(){
    //enginelog: date formatting cannot have slashes for some reason when calling the img file
    //resolved by changing date formatting to dots, ie m.d.y.jpg and m.d.y.html
    $date = ''.date(m).".".date(d).".".date(y).'';
    //$date is the date, duh
    //this shows the image on the homepage:
    echo "<img src='$date.jpg'>";
    //$newpage is the new html page

    $newpage = fopen("$date.html", w);
    fwrite($newpage, "<html><link rel='stylesheet' href='ec.css'><div id='body1'>
    <h1 style='text-align: center'> archived content for $date </h1> <title>extracrispy</title>
    </br></div><body id='body2'><img src='$date.jpg'></br><a href='$previousdate.html' class='button'>Previous </a>
    <a href='$nextdate.html' class='button'>Next</a>
    </body></html>");
    //goal is to create buttons that take you to previous and next days' content by altering
    //$date and giving it to links
    //enginelog: $previousday is successful, should be included from now on.
    //I should know if it works in the archive by sunday
    $currentday = (int)substr($date, 3,2);
    $previousday = $currentday - 1;
    $previousdate = ''.substr($date, 0,2).'.'.$previousday.'.'.substr($date, -2);
    echo "<a href='$previousdate.html' class='button'>Previous</a>";
    //now let's try $nextday
    $nextday = $currentday + 1;
    $nextdate = ''.substr($date, 0,2).'.'.$nextday.'.'.substr($date, -2);
    echo "     ";
    echo "<a href='$nextdate.html' class='button'>Next</a>";
    //next day is successful on the home page, same timeframe as $previous for archive
}

?>
