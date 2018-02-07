<?php
date_default_timezone_set('Asia/Shanghai');
$ip=$_SERVER["REMOTE_ADDR"];//ip地址
$time=date("Y.m.d H:i:s");
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$UA=$_SERVER['HTTP_USER_AGENT'];
$URL=urldecode($URL);

$t="\n".$time."\n".$ip."\n".$URL."\n".$UA."\n"; 
$fp=fopen("visit.txt",'a+'); 
fwrite($fp,$t);
fclose($fp);

?>