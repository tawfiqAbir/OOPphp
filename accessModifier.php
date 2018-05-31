<?php
###################################
#public:public property can accessable from anywhere;
#private:private property only accessible in the class we can not access it by object and 
#cannot extend it;
#protected:protected property cannot be accessed by object but it can be used by extended 
#classes
class User{
	public $name="tawfiq";
	protected $email="tawfiq.abir@gmail.com";
	private $password="12345";

	public function getPass(){
		return $this->password;
	}

}
class Admin extends User{
	public function __construct(){
		echo $this->email;
	}
}

$user =new Admin;
// $user=new User;
// echo $user->getPass();