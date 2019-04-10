<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ip = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$a = "\nIP: ";
$user = "\nUser-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];
$space = "\r\n";
$file = 'ip.txt';
$fp = fopen($file, 'a');
fwrite($fp, $a);
fwrite($fp, $ip);
fwrite($fp, $user);
fwrite($fp, $browser);
fwrite($fp, $space);
fclose($fp);
?>