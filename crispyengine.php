    
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
    $date = ''.date(m).".".date(d).".".date(y).'';
    echo "<img src='$date.jpg'>";
    echo "<img src='test.jpg'>";    
}

?>

