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

function reserve(&$map, $row, $place) {
	if ($map[$row-1][$place-1] === false) {
		$map[$row-1][$place-1] = true;
		$result = true;
		return $result;
	} elseif ($map[$row-1][$place-1] === true) {
		$result = false;
		return $result;
	} elseif ($map[$row-1][$place-1] === NULL) {
		return false;
	}
}

$chairs = 50;
$map = generate(5, 8, $chairs);
$requiredRow = 3;
$requiredPlace = 5;

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);

function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place <br/>".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась <br/>".PHP_EOL;
    }
}

?>