<?php
echo "test";
//insert code here

$NIH = file_get_contents("http://notinventedhe.re");
$b = "<br/>";
$Nstart = strpos($NIH, '<div id="comic-content">') ;
echo $b;
if 4 == 8 * .5 :
    echo "true";
. 
$Nfinish = strpos($NIH, '><div id="comic-nav">') ;
echo '<link rel="shortcut icon" href="ecn.ico">';
echo $Nstart;
echo $b;
echo $Nfinish;
echo "<title> ExtraCrispy.Ninja </title>";

echo substr($NIH, 1507, 228);
//to solve date problem (come back to this) create a conditional with an else that changes it to 1507 229
//date problem is that if the day value has 2 digits, the substr gets off
//haven't actually confirmed whether or not that will happen tho
echo $b;

$xkcd = file_get_contents("http://www.xkcd.com");

$xstart = strpos($xkcd, '<div id="co') ;

$xfinish = strpos($xkcd, '/div', $xstart);
$xcomic = $xfinish - $xstart-1;

echo $xstart;
echo $b;
echo  $xfinish;
echo $b;
echo substr($xkcd, $xstart, $xcomic);










echo "</html>";






































?> 
