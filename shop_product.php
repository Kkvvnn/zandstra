<?php

Header("Content-Type:text/html; charset=UTF-8");

class ShopProduct {
	public $title 		  = "Стандартный товар";
	public $producerFirstName = "Имя автора";
	public $producerMainName  = "Фамилия автора";
	public $price 		  = 0;

	public function __construct( $title, $firstName, $mainName, $price ) 
	{
		$this->title             = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price             = $price;
	}
	
	public function getProducer() 
	{
		return "{$this->producerFirstName} "
			."{$this->producerMainName}";
	}
}

$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);

print "Автор: {$product1->getProducer()} ";
