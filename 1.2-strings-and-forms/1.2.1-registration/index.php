<?php 
$login = $_POST['login'];

$password = $_POST['password'];

$email = $_POST['email'];

$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$middleName = $_POST['middleName'];

$codeWord = 'nd82jaake';

$codeWordWithSpace = $_POST['code'];

$codeWordWithoutSpace = str_replace(' ', '', $codeWordWithSpace);

if ((preg_match('/[()@*?,;:]/', $login) === 1) || ((preg_match('/\//', $login) === 1))) {
	echo ('Логин содержит запрещенные символы! <br/>');
};

if (preg_match('/[0-9a-zA-Zа-яёА-ЯЁ!@#$%^&*()-+<>{}.,;:]{8,}/u', $password) !== 1) {
	echo ('Пароль содержит менее 8 символов! <br/>');
};

if (preg_match('/\w+\@\w+\./', $email) !== 1) {
	echo ('Электронная почта введена неправильно! <br/>');
};

if ($firstName === '') {
	echo ('Поле "Имя" не может быть пустым! <br/>');
};

if ($firstName === '') {
	echo ('Поле "Имя" не может быть пустым! <br/>');
};

if ($lastName === '') {
	echo ('Поле "Фамилия" не может быть пустым! <br/>');
};

if ($middleName === '') {
	echo ('Поле "Отчество" не может быть пустым! <br/>');
};

if (strtolower($codeWordWithoutSpace) !== $codeWord) {
	echo ('Кодовое слово введено неверно! <br/>');
};


if (preg_match('/\w+\@\w+\./', $email) === 1 
	&& preg_match('/[()@*?,;:]/', $login) !== 1 
	&& preg_match('/\//', $login) !== 1 
	&& preg_match('/[0-9a-zA-Zа-яёА-ЯЁ!@#$%^&*()-+<>{}.,;:]{8,}/u', $password) === 1 
	&& $firstName !== '' 
	&& $lastName !== '' 
	&& $middleName !== '' 
	&& mb_strtolower($codeWordWithoutSpace) === $codeWord) {

		echo ('Регистрация прошла успешно!');

};

?>