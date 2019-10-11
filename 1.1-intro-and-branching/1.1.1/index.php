<?php
$variable = 3;

if (is_bool($variable)) {
	$type = 'bool';
	$nameOfType = 'Логический тип данных. Булевые переменные.'; 
	$description = 'Переменные логического типа могут принимать два значения: true (истина) или false (ложь).';
} elseif (is_float($variable)) {
    $type = "float";
	$nameOfType = 'Число с плавающей точкой.'; 
	$description = 'Используется для вещественных чисел.';
} elseif (is_int($variable)) {
	$type = "int";
	$nameOfType = 'Целое 32-битное число со знаком.'; 
	$description = 'Возможные значения в диапазоне от-2 147 483 648 до 2 147 483 647.';
} elseif (is_string($variable)) {
	$type = "string";
	$nameOfType = 'Строки.'; 
	$description = 'Применяются для работы с текстом.';
} elseif (is_null($variable)) {
	$type = "null";
	$nameOfType = '"Пустой" тип. Указывает, что значение переменной не определено.'; 
	$description = 'Используется в тех случаях, когда нужно указать, что переменная не имеет значения.';
} else {
	$type = "other";
	$nameOfType = 'Переменная относится к типам объект, массив или ресурс.'; 
	$description = 'Используется в тех случаях, когда нужно указать, что переменная не имеет значения.';
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p>
		<?php echo "$variable is $type" ?><br>
		<?php echo $nameOfType ?><br>
		<?php echo $description ?>
	</p>
</body>
</html>