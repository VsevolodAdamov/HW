<?php
$arr1 = [333, 55555, 13333333, 77];
$arr2 = [4444, 666666, 333, 77];

function subtraction ($arr1, $arr2){
	//проверяем массивы на совпадение количество строк;
	if (count($arr1) != count($arr2)){
		//сообщаем если количества строк не совпадают;
		echo "different length";
		//если количество трок в массивах одинаково допускаем к сравнению;
	} else {
		//переменная для сравнения полученных длинн;
		$i=0; 
		//перебираем массивы по ключам;
		for ($a = 0; $a < count($arr1); ++$a){
			//получаем разницу длинн по модулю;
			$subtraction = abs(strlen($arr1[$a]) - strlen($arr2[$a]));
			//сравниваем полученные длины;
			if ($i < $subtraction){
				//вормируем ответ функции;
				$i = "subtraction $subtraction";
			}
		}
	}
	//возвращаем полученный результат;
	return $i;
}

echo subtraction ($arr1, $arr2);