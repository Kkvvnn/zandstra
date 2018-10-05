<?php

Header("Content-Type:text/html; charset=UTF-8");

class CDProduct {
	public $title 		  = "Стандартный товар";
	public $producerFirstName = "Имя автора";
	public $producerMainName  = "Фамилия автора";
	public $price 		  = 0;
	public $playLength        = 0;
	
	public function __construct( $title, $firstName, $mainName, 
				     $price, $playLength ) 
	{
		$this->title             = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price             = $price;
		$this->playLength        = $playLength;
	}

	public function getPlayLength()
	{
		return $this->playLength;
	}
	
	public function getSummaryLine()
	{
		$base  = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		$base .= ": Время звучания - {$this->playLength}";

		return $base;
	}

	public function getProducer() 
	{
		return "{$this->producerFirstName} "
			."{$this->producerMainName}";
	}
