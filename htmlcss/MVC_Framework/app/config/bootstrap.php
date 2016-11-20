<?php

$includePath = array(LIB_PATH, APP_PATH.DS.'classes', get_include_path()); # создаём массив состаящий из: пути до библиотеки, пути до каталога classes из любой папки находящейся в каталоге app, и get_include_path, который возвращает текущее значение настройки include_path
$includePath = implode(PATH_SEPARATOR, $includePath) # создаём из нашего массива одну строку разделённую знаком ;
set_include_path($includePath); # Указываем список директорий, в которых функции require, include, fopen(), file(), readfile() и file_get_contents() ищут файлы.

require_once 'PEAR'.DS.'NameSheme'.DS.'Autoload.php'; # Подключаем с помощью require_once файл Autoload.php
# Подключаем нужные нам для работы файлы
include_once APP_PATH.DS.'config'.DS.'app_conf.php';
include_once APP_PATH.DS.'config'.DS.'routes.php';
include_once LIB_PATH.DS.'function.php';
include_once APP_PATH.DS.'config'.DS.'db_conf.php';
# Подключаем нужные нам для работы файлы

$router = Routing_Router::instanc(); # создаём объукт класса
$router = $router->getRoute($_SERVER['REQUEST_URI']); # записывае в router URI, который был передан для того, чтобы получить доступ к этой странице. 

errorReporting(); # вывод ошибок
dispatch($router); # запускаем функцию dispatch
?>