<?php 
$config = Dbconnect::instance(); # создаём объект класса
$config->set(array( # указываем параметры нужные для соединения с базой
	'host' => 'host_name'
	'user' => 'user'
	'pass' => 'password'
	'name' => 'database_name'
));
$config->connect(); # вызываем функцию коннекта к базе

unset($config); # удаляем переменную
?>