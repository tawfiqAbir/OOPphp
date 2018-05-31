<?php

class Fruits{
	public $name;
	public function setName($name){
		$this->name=$name;
	}
}

class Apple extends Fruits{
	
	public function juice()
	{
		echo "juice";
	}
}

class Mengo extends Fruits{

}
$apple=new Apple();
$apple->setName('abir');
echo $apple->name;
$mengo=new Mengo();
$mengo->setName('abir');
echo $mengo->name;