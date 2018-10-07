<?php

Header("Content-Type:text/html; charset=UTF-8");

class ShopProduct {
	private   $title             = "Стандартный товар";
	private   $producerFirstName = "Имя автора";
	private   $producerMainName  = "Фамилия автора";
	protected $price             = 0;
	private   $discount          = 0;
	
	public function __construct( $title, $firstName, $mainName, 
				     $price ) 
	{
		$this->title             = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price             = $price;
	}

	public function getProducerFirstName () {
		return $this->producerFirstName;
	}
	
	public function getProducerMainName () {
		return $this->producerMainName;
	}
	
	public function setDiscount($num) {
		$this->discount = $num;
	}

	public function getDiscount() {
		return $this->discount;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getPrice() {
		return ($this->price - $this->discount);
	}

	public function getSummaryLine()
	{
		$base  = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";

		return $base;
	}
	public function getProducer() 
	{
		return "{$this->producerFirstName} "
		      ."{$this->producerMainName}";
	}
}


class CDproduct extends ShopProduct {

	private $playLength;

	public function __construct($title, $firstName, $mainName,
					$price, $playLength) 
	{
		parent::__construct($title, $firstName, $mainName, $price);
		$this->playLength = $playLength;
	}
	
	public function getPlayLength()
	{
		return $this->playLength;
	}
	
	public function getSummaryLine()
	{
		$base  = parent::getSummaryLine();
		$base .= ": Время звучания - {$this->playLength}";
		
		return $base;
	}
}


class BookProduct extends ShopProduct {

	private $numPages;

	public function __construct($title, $firstName, $mainName,
					$price, $numPages) 
	{
		parent::__construct($title, $firstName, $mainName, $price);
		$this->numPages = $numPages;
	}
	
	public function getNumberOfPages()
	{
		return $this->numPages;
	}	
	
	public function getSummaryLine()
	{
		$base  = parent::getSummaryLine();
		$base .= ": {$this->numPages} стр.";
		return $base;
	}

	public function getPrice() {
		return $this->price;
	}
}
