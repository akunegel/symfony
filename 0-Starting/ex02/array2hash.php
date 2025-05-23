<?php
function array2hash($array) {
	$ret = array($array[0][1]=>$array[0][0], $array[1][1]=>$array[1][0]);
	return $ret;
}
