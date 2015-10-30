<?php

date_default_timezone_set('America/Chicago');
echo '<link rel="stylesheet" href="ec.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> comic crawler </h1>';
echo "<title>other comics</title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';


//this stores EC's xkcd and NIH crawlers
//they weren't playing nicely with the other functions so we had to separate them
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

//content creation
function comicreader() {
    $weekday = date('D');
if ($weekday === "Mon") {
    echo "it's monday, time for xkcd!";
    xkcd();
}

if ($weekday === "Wed") {
    echo "it's wednesday, time for xkcd!";
    xkcd();
}

if ($weekday === "Fri") {
    echo "it's friday, time for xkcd!";
    xkcd();
}

if ($weekday === "Tue") {
    echo "it's tuesday, time for NIH!";
    NIH();
}

if ($weekday === "Thu") {
    echo "it's thursday, time for NIH!";
    NIH();
}
}
comicreader();







?>
