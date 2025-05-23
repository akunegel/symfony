<?php
require_once 'HotBeverage.php';

class Coffee extends HotBeverage {
	private string $description;
	private string $comment;

	public function __construct() {
		$this->name = "Coffee";
		$this->price = 2.50;
		$this->resistance = 10;
		$this->description = "Cafeine beverage";
		$this->comment = "Not bad";
	}

	public function getDescription() {
		return $this->description;
	}

	public function getComment() {
		return $this->comment;
	}
}
