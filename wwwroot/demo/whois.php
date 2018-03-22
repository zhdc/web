<?php
$resource = fsockopen("whois.west263.com",43,$errno,$errstr,30);
$connect = "";
if (!$resource){
	die("Α¬½ΣΚ§°ά");
}else {
	fwrite($resource,"bbsunny.com\r\n");
	while (!feof($resource)){
		$connect .= fgets($resource,128);
	}
	//echo $connect;
	preg_match('/Registrant Email.*\n/',$connect,$m);
	print_r($m);
}