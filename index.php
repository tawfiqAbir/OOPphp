<?php

/**
* 
*/
class Student{
	public $name;
	public $attendence;
	public $totalMarks;


	public function StuDetails($name,$attendence,$totalMarks){
		$this->name=$name;
		$this->attendence=$attendence;
		$this->totalMarks=$totalMarks;
	}

}
$student=new Student();
$student->StuDetails('abir',true,99);
echo $student->name;
