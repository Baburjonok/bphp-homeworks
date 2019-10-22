<?php 

function generate($rows, $placesPerRow, $avaliableCount) {
	$arr = [];
	if ($avaliableCount < $rows * $placesPerRow) {
	return false;
	} else {
		for ($i=0; $i < $rows; $i++) {
			for ($j=0; $j < $placesPerRow; $j++) {
			$arr[$i][$j] = false;
			}
		}
		return $arr;
	}
}

function reserve(&$map, $numberOfSeats) {
	
	for ($j=0; $j < count($map); $j++) {
		$array = [];
		
		for ($i=0; $i < count($map[$j]); $i++) {
			
			if ($map[$j][$i] === true) {
				$array = [];
			} elseif ($map[$j][$i] === false && count($array) <= $numberOfSeats) {
				$array[$i] = false;
			
				if (count($array) === $numberOfSeats) {
					$rows = $j + 1;
					echo ("Забронировано: <br/>");
					echo ("Ряд: $rows <br/>");
					
					for ($placeNumber = $i - $numberOfSeats + 1; $placeNumber <= $i; $placeNumber++) {
						$map[$j][$placeNumber] = true;
						$bookedPlaceNumber = $placeNumber + 1;
						echo ("Место $bookedPlaceNumber <br/>");
					}
					
					echo ("<br/>");
					break;
						
				} 
			
			}
		}

		if (count($array) === $numberOfSeats) {
			break;
		} 
	} 
	
	if (count($array) !== $numberOfSeats) {
		echo ("Расположенных рядом мест для бронирования нет!");
	}
}	

$chairs = 50;
$map = generate(5, 10, $chairs);

$reverve = reserve($map, 3);
$reverve = reserve($map, 3);
$reverve = reserve($map, 3);
$reverve = reserve($map, 3);
$reverve = reserve($map, 4);
$reverve = reserve($map, 7);
$reverve = reserve($map, 7);
$reverve = reserve($map, 7);
$reverve = reserve($map, 7);

?>