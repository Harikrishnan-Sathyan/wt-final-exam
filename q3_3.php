<?php
$myfile = fopen("a024.txt", "w") or die("Unable to open file!");
$txt = "Hi, I am Harikrishnan, Roll no. A024 from batch B2 and currently pursuing MCA from MPSTME\n";
fwrite($myfile, $txt);

fclose($myfile);
?>