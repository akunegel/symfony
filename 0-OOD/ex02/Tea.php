<?php

require_once 'HotBeverage.php';

class Tea extends HotBeverage {
	private string $description;
	private string $comment;

	public function __construct() {
		$this->name = "Tea";
		$this->price = "2.0";
		$this->resistance = "1";
		$this->description = "Infused beverage";
		$this->comment = "Good";
	}

	public function getDescription() {
		return $this->description;
	}

	public function getComment() {
		return $this->comment;
	}
}
