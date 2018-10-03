<?php

Header("Content-Type:text/html; charset=UTF-8");

class ShopProduct {
	public $title 		  = "Стандартный товар";
	public $producerFirstName = "Имя автора";
	public $producerMainName  = "Фамилия автора";
	public $price 		  = 0;
	public $type              = "unknown_type";
	public $numPages          = 0;
	public $playLength        = 0;
	
	public function __construct( $title, $firstName, $mainName, 
				     $price, $type, $numPages=0, $playLength=0 ) 
	{
		$this->title             = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price             = $price;
		$this->type              = $type;
		$this->numPages          = $numPages;
		$this->playLength        = $playLength;
	}

	public function getNumberOfPages()
	{
		return $this->numPages;
	}	

	public function getPlayLength()
	{
		return $this->playLength;
	}
	
	public function getSummaryLine()
	{
		$base  = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";

		if ($this->type == 'book') {
			$base .= ": {$this->numPages} стр.";
		} else if ($this->type == 'cd') {
			$base .= ": Время звучания - {$this->playLength}";
		}

		return $base;
	}

	public function getProducer() 
	{
		return "{$this->producerFirstName} "
			."{$this->producerMainName}";
	}
}

$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);
$product2 = new ShopProduct("Пропавший без вести", "Группа", "ДДТ", 10.99);

print "Автор: {$product1->getProducer()} <br>";
print "Исполнитель: {$product2->getProducer()}";
