<?php
$special_chr	= chr(230);
$time		= time();
$file		= fopen($time .".txt", "a");
fwrite($file, "<img/\/".$special_chr ."/src=x onerror=alert(1)//>\n");
fclose($file);

?>