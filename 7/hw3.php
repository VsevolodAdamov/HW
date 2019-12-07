<?php
class Animals {

	public $paw; 

	public function animal(){
		if ($this->paw == 4){
			$ansver_paw = "This is animal have " . $this->paw . " paw";
		} else {
			$ansver_paw = "it has " .$this->paw . "legs";
		}
		return $ansver_paw;
	}
}
//$beast1 = new Animals();
//$beast1->paw = 3;
//echo $beast1->animal();
//echo PHP_EOL;

class Cats extends Animals {

	public $tail;

	public function cat(){
		if ($this->tail == 1){
			$ansver_tail = "This is a cat with " . $this->tail . " tail";
		} else {
			$ansver_tail = "maybe it has " . $this->tail . " tails";
		}

		return  $ansver_tail;
	}

	public function animal(){
		return parent::animal(). " and " . $this->cat();
			 
	}

}

//$beast2 = new Cats();
//$beast2->paw = 4;
//$beast2->tail= 1;
//echo $beast2->animal();
//echo PHP_EOL;

class Barsik extends Cats {

	public $weight;

	public function home_cat(){
		if ($this->weight > 4){
			$ansver_weight = $this->weight . " kilograms of joy ";
		} else {
			$ansver_weight = "only " . $this->weight . "kilograms";
		}

		return  $ansver_weight;
	}

	public function animal(){
		return parent::animal(). " . \n" . $this->home_cat();
			 
	}

}

$beast3 = new Barsik();
$beast3->paw = 4;
$beast3->tail= 1;
$beast3->weight= 6;
echo $beast3->animal();