<?php
function capital_city_from($state) {
	$states = ['Oregon' => 'OR', 'Alabama' => 'AL', 'New Jersey' => 'NJ', 'Colorado' => 'CO'];
	$capitals = ['OR' => 'Salem', 'AL' => 'Montgomery', 'NJ' => 'trenton', 'KS' => 'Topeka'];
	
	if (array_key_exists($state, $states)) {
		echo $capitals[$states[$state]], "\n";
	} else {
		echo "Unknown\n";
	}
}
