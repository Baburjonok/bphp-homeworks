<?php 

$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$middleName = $_POST['middleName'];

$lengthFirstName = mb_strlen($firstName);

$lengthLastName = mb_strlen($lastName);

$lengthMiddleName = mb_strlen($middleName);

$firsSignFirstName = mb_substr($firstName, 0, 1);

$firsSignLastName = mb_substr($lastName, 0, 1);

$firsSignMiddleName = mb_substr($middleName, 0, 1);

$otherSignFirstName = mb_substr($firstName, 1);

$otherSignLastName = mb_substr($lastName, 1);

$otherSignMiddleName = mb_substr($middleName, 1);

$fullName = mb_strtoupper($firsSignLastName).strtolower($otherSignLastName).' '.mb_strtoupper($firsSignFirstName).strtolower($otherSignFirstName).' '.mb_strtoupper($firsSignMiddleName).strtolower($otherSignMiddleName);            //'Иванов Иван Иванович'

$fio = mb_strtoupper($firsSignLastName).mb_strtoupper($firsSignFirstName).mb_strtoupper($firsSignMiddleName);                 //'ИИИ'

$surnameAndInitials = mb_strtoupper($firsSignLastName).strtolower($otherSignLastName).' '.mb_strtoupper($firsSignFirstName).'. '.mb_strtoupper($firsSignMiddleName).'.';                 //'Иванов И.И.'

echo ("Полное имя: '$fullName' <br/>");

echo ("Фамилия и инициалы: '$surnameAndInitials' <br/>");

echo ("Аббревиатура: '$fio' <br/>");

?>