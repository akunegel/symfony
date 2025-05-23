<?php
function search_by_states($str) {
	$states = ['Oregon' => 'OR', 'Alabama' => 'AL', 'New Jersey' => 'NJ', 'Colorado' => 'CO'];
	$capitals = ['OR' => 'Salem', 'AL' => 'Montgomery', 'NJ' => 'trenton', 'KS' => 'Topeka'];

	$split = explode(", ", $str);
	for ($x = 0; $x < count($split); $x++) {
		if (array_key_exists($split[$x], $states)) {
			echo $capitals[$states[$split[$x]]], " is the capital of ", $split[$x], ".\n";
		} elseif (array_search($split[$x], $capitals)) {
			if (array_search(array_search($split[$x], $capitals), $states)) {
				echo $split[$x], " is the capital of ", array_search(array_search($split[$x], $capitals), $states), ".\n";
			} else {
				echo $split[$x], " is neither a capital nor a state.\n";
			}
		} else {
			echo $split[$x] , " is neither a capital nor a state.\n";
		}
	}
}
