<?php

class HotBeverage {
	protected string $name;
	protected float $price;
	protected int $resistance;

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getResistance() {
		return $this->resistance;
	}
}
