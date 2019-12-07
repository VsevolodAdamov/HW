<?php

function ewq ($arr,$sum=0, $b=0){
	if ($b == count($arr)){
		return;
	} 
	if ($arr[$b] % 2 == 0){
		$sum += $arr[$b]; 
	}
	if ($b == count($arr)-1){
			echo $sum;
	}
	$b++;
	ewq ($arr,$sum,$b);
}

$arr = [1,2,3,4,5,6,43,3,5,4,8,1,4,2,3];
echo ewq ($arr);
echo PHP_EOL;