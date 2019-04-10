<?php

function mulai(){

	echo "[!] Starting...\n";
	$bersih = shell_exec("clear");
	echo "$bersih";
	echo "[!] Result will be saved in abc/ip.txt\r\n";
	$run = system("php -S 127.0.0.1:8888 -t abc & ssh -R 80:127.0.0.1:8888 serveo.net");
	echo "$run";
}
echo "Coded by arild312\r\n\n";
echo "[01] Start\n";
echo "[02] Exit\r\n";
echo "[*] Enter choice: ";
$choice = $a = fopen ("php://stdin","r");
$choices = fgets($choice);

if(trim($choices) == '1'){

mulai();

}else {

echo "Bye\n";

}
?>