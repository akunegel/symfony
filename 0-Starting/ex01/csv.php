<?php

$myfile = fopen("ex01.txt", "r") or die("Unable to open file!");
$content = fread($myfile,filesize("ex01.txt"));

$tmp = "";
$i = 0;

for ($x = 0; $x < filesize("ex01.txt"); $x++) {
	if($content[$x] == ",") {
		echo $tmp, "\n";
		$tmp = "";
		$i = 0;
	}
	else {	
		$tmp[$i] = $content[$x];
		$i++;
	}
}
echo $tmp;

fclose($myfile);
