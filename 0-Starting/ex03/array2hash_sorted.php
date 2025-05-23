<?php
function array2hash_sorted($array) {
	$hash = array();
	for ($x = 0; $x < count($array); $x++) {
		$hash[$array[$x][0]] = $array[$x][1];
	}
	krsort($hash);
	return $hash;
}
