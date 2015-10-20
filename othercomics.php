<?php
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

date_default_timezone_set('America/Chicago');






?>
