<?php

Header("Content-Type:text/html; charset=UTF-8");

class BookProduct {
	public $title 		  = "Стандартный товар";
	public $producerFirstName = "Имя автора";
	public $producerMainName  = "Фамилия автора";
	public $price 		  = 0;
	public $numPages          = 0;
	
	public function __construct( $title, $firstName, $mainName, 
				     $price, $numPages ) 
	{
		$this->title             = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price             = $price;
		$this->numPages          = $numPages;
	}

	public function getNumberOfPages()
	{
		return $this->numPages;
	}	
	
	public function getSummaryLine()
	{
		$base  = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		$base .= ": {$this->numPages} стр.";

		return $base;
	}

	public function getProducer() 
	{
		return "{$this->producerFirstName} "
			."{$this->producerMainName}";
	}
}
