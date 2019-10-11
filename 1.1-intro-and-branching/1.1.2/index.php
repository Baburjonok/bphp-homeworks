<?php
	$greeting = 'Добрый день!';
	$hour = date("H");
	$day = date("N"); 
	
	if ($hour >= 6 && $hour < 11) {
		$greeting = 'Доброе утро!';
		$image = 'img/morning.jpg';
	} elseif ($hour >= 11 && $hour < 18) {
		$greeting = 'Добрый день!';
		$image = 'img/day.jpg';
	} elseif ($hour >= 18 && $hour < 23) {
		$greeting = 'Добрый вечер!';
		$image = 'img/evening.jpg';
	} else {
		$greeting = 'Доброй ночи!';
		$image = 'img/night.jpg';
	};
	
	switch ($day) {
		case 1: $dayOfTheWeek = 'понедельник'; break;
		case 2: $dayOfTheWeek = 'вторник'; break;
		case 3: $dayOfTheWeek = 'среда'; break;
		case 4: $dayOfTheWeek = 'четверг'; break;
		case 5: $dayOfTheWeek = 'пятница'; break;
		case 6: $dayOfTheWeek = 'суббота'; break;
		case 7: $dayOfTheWeek = 'воскресенье'; break;
	}
	
	if (($day >= 1 && $day <= 3 && $hour >= 9 && $hour <= 18) || ($day >= 4 && $day <= 6 && $hour >= 10 && $hour <= 18)) {
		$message = 'Это лучший день, чтобы обратиться в Horns&Hooves!';
		$workTime = 'Мы работаем для Вас до 18:00!';
	} elseif ($day >= 1 && $day <= 3 && $hour < 9) {
		$message = 'Это лучший день, чтобы обратиться в Horns&Hooves!';
		$workTime = 'Мы работаем для Вас с 9:00!';
	} elseif ($day >= 4 && $day <= 6 && $hour < 10) {
		$message = 'Это лучший день, чтобы обратиться в Horns&Hooves!';
		$workTime = 'Мы работаем для Вас с 10:00!';
	} elseif (($day >= 1 && $day <= 2 && $hour > 18) || ($day === 7)) {
		$message = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves!';
		$workTime = 'Мы работаем для Вас с 9:00!';
	} elseif ($day >= 3 && $day <= 5 && $hour > 18) {
		$message = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves!';
		$workTime = 'Мы работаем для Вас с 10:00!';
	} elseif ($day === 6 && $hour > 18) {
		$message = 'Послезавтра - лучший день, чтобы обратиться в Horns&Hooves!';
		$workTime = 'Мы работаем для Вас с 9:00!';
	};
	
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1>
				<?php echo $greeting ?><br>
				<?php echo "Сегодня $dayOfTheWeek." ?>
			</h1>
			<h3>
				<?php echo $message ?><br>
				<?php echo $workTime ?>
			</h3>
        </div>
    </div>
</body>
</html>