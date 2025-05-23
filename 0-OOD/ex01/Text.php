<?php

class Text {
	public $strings;

	function __construct($array) {
		foreach ($array as $str) {
			$this->strings[] = $str;
		}
	}

	function append($str) {
		$this->strings[] = $str;
	}

	function readData() {
		$ret = "";
		foreach ($this->strings as $str) {
			$ret .= "<p>" . $str . "</p>\n";
		}
		return $ret;
	}
}
