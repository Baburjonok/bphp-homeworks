<?php 

//Задача 1

$address = 'https://example.com';

if (substr($address, 0, 5) === 'https') {
	echo ("Да  <br/>");
} else {
	echo ("Нет  <br/>");
};

if (strpos($address, 'https') === 0) {
	echo ("Да  <br/>");
} else {
	echo ("Нет  <br/>");
};

//Задача 2

$date = '05-29-1993';

$newDate = str_replace('-', '.', $date);

echo ("$newDate   <br/>");

//Задача 3

$price = '2118475283701221321536';

$finishPrice = null;

for ($i = 1; $price > 0; $i++) {
	$lastSingPrice = substr($price, -3);
	$price = substr($price, 0, strlen($price) - 3);
	$finishPrice = $lastSingPrice.' '.$finishPrice;
};

echo ($finishPrice.' руб.');

?>