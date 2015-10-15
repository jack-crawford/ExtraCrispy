<?php
//html code below here:
echo '<link rel="stylesheet" href="ecn.css">';
echo '<div id="body1">';
echo '<h1 style="text-align: center"> welcome to extracrispy </h1>';
echo "<title> extracrispy </title>";
echo "</br>";
echo '</div>';
echo '<body id="body2">';
?>
<?php
//xkcd code below here:
function xkcd() {
$xkcd = file_get_contents("http://www.xkcd.com");

$xstart = strpos($xkcd, '<div id="co') ;

$xfinish = strpos($xkcd, '/div', $xstart);
$xcomic = $xfinish - $xstart-1;


echo $b;
echo substr($xkcd, $xstart, $xcomic);

}

?>
<?php
//functional code here!

$weekday = date('D');
echo $weekday;

if ($weekday === "Mon") {
    echo "time for xkcd!";
    xkcd();
}

if ($weekday === "Wed") {
    echo "time for xkcd!";
    xkcd();
}

if ($weekday === "Fri") {
    echo "time for xkcd!";
    xkcd();
}
echo '</body>';

?> 
