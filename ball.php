<?php
namespace OOPPHP; //namespace

//class
class Ball{ 
	private $type; //property

	//construct method
  	public function __construct($type){ 
    	$this->type = $type;
	}

	//method get Type
	public function getType(){
		return $this->type; //return
	}

	//method Rebound
  	public function rebound(){
		echo '<br>'.$this->type.' ball bouncing'; //print
	}

	///method Thrown
	public function thrown(){
		echo '<br>'.$this->type.' ball thrown';
	}

} //end class

$basket = new Ball('basket');
print '<pre>';
	var_dump($basket);
print '</pre>';
print 'Jenis bola: '.$basket->getType();
$basket->rebound();
$basket->thrown();