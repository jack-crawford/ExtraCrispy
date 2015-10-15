    
<?php

//insert code here


echo "<link rel='stylesheet' type='text/css' href='style.css'> ";
echo "<title> extracrispy </title>";
echo "<head id='header'> welcome to extracrispy </head>";

function NIH() {
$NIH = file_get_contents("http://notinventedhe.re");
$b = "<br/>";
$Nstart = strpos($NIH, '<div id="comic-content">') ;
echo $b;

$Nfinish = strpos($NIH, '><div id="comic-nav">') ;




echo substr($NIH, 1507, 228);
}
//to solve date problem (come back to this) create a conditional with an else that changes it to 1507 229
//date problem is that if the day value has 2 digits, the substr gets off
//haven't actually confirmed whether or not that will happen tho
?>
<?php
echo $b;
function xkcd() {
$xkcd = file_get_contents("http://www.xkcd.com");

$xstart = strpos($xkcd, '<div id="co') ;

$xfinish = strpos($xkcd, '/div', $xstart);
$xcomic = $xfinish - $xstart-1;


echo $b;
echo substr($xkcd, $xstart, $xcomic);

}
xkcd();
?>

