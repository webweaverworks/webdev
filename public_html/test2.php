<?php

class animal {

protected $name = 'noname';
protected $age = 15;

public function show(){

	$this->name = 'Coconut';
	

}

public function final() {
echo $this->name;
}

}



$cat = new animal();
$cat->show();
$cat->final();


echo "<br/><br/>";
/*
function example(animal $cat){
$cat->final();
//$cat2->show();


}
$example();
 */
function example(animal $animal){
	
$animal->final();	
	echo 'works';

}

example();



echo "<br/><br/>end";

?>
