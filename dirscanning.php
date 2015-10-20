<?php
//Purpose: Figure out a system of scandir-ing that will find new content
//and return it as "new content". Somehow. I need to science the shit out of this



$dir = getcwd();
fopen("dirscan.txt", w);
fwrite("dirscan.txt", var_dump(scandir($dir));














?>
