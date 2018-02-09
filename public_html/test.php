<?php 
/*
$subject1 = "language";
$subject2 = "Math";
$subject3 = "Geography";
$subject4 = "Biology";
$subject_list = array('subject1','subject2');

$result = compact('subject4','subject3' , $subject_list);
//print_r($subject1);
print_r($result);

echo "<br/><br/>";

echo "<br/><br/>";
var_dump($result);
 */


/*
class Animal { 
	protected $name; 
	public function showname()
	{
	 $this->name = "Cocunut";
	 echo $this->name;
	}
	public function growl(){ echo "Grrr"; }


}

$cat = new Animal();
$cat->showname();

$doerak = new Animal();
$doerak->showname();


class Dog {
public $canine;
public function __construct(Animal $dog){
$this->canine = $dog;
}

public function showname2(){
echo $this->canine->showname();

}
}
$trouble = new Dog($doerak);
$trouble->showname2();
$trouble->canine->showname();
$trouble->canine->growl();

$cat->growl();

echo "<br><br>end";	
 */






class vehicle {

public function driveforward() { echo "driving forward<br><br>"; }
public function drivebackward() { echo "driving backward<br><br>"; }

}


class car {
public $machine;
public function __construct(vehicle $machine){


	$this->machine = $machine;
	echo "machine created<br><br>";
}

}



$fusion = new vehicle();

$hlz = new car($fusion);
$hlz->machine->driveforward();
$hlz->machine->drivebackward();
echo "end";


?>


