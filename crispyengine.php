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



function localcontent(){
    //enginelog: date formatting cannot have slashes for some reason when calling the img file
    //resolved by changing date formatting to dots, ie m.d.y.jpg
    $date = ''.date(m).".".date(d).".".date(y);
    $newpagetemplate = "<html><link rel='stylesheet' href='ec.css'><div id='body1'> <h1> archived content for $date </h1> </div> <body id='body2'> <img src='$date'.jpg> </body> </html>";
    echo "<img src='$date'.jpg>";
    $newpage = fopen("$date.html", w);
    fwrite($newpage, $newpagetemplate);
    echo "</br>";
}
//ideal function is to create back and forth buttons that generate their links by adding or subtracting
// to the date(d) portion of $date
function archivenav() {
  //  $previousdate =
    echo "<a href= '$date.html'> <<< Comic </a>";
}

?>
