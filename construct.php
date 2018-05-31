<?php

class Bill{
	public $dinner=20;
	public $desert=5;
	public $coldDrink=3;
	public $bill;

	public function __construct(){
		$this->bill=3;
	}


	public function dinner($person){

		$this->bill+=$this->dinner*$person;
		return $this;
	}
	public function desert($person)
	{
		$this->bill+=$this->desert*$person;
		return $this;
	}
	public function coldDrink($person)
	{
		$this->bill+=$this->coldDrink*$person;
		return $this;

	}
	public function __destruct(){
		$this->bill=3;
	}

}
$bill=new Bill();
 echo $bill->dinner(4)->desert(4)->coldDrink(4)->bill;
