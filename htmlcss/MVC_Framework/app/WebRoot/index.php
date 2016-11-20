<?php 
# файл index.php является точкой входа нашего веб-приложения
define('APP_PATH', realpath('../')); # Указываем путь до нашего приложения в переменную APP_PATH

define('LIB_PATH', realpath('../../lib')); # Указываем путь до каталога в котором будем хранить библиотеки в переменную LIB_PATH

define('DS', DIRECTORY_SEPARATOR); # Переменная DS теперь соответствует символу /

define('CACHE_ROOT', APP_PATH.DS.'temp'.DS.'cache'); # Указываем в переменную CACHE_ROOT путь до каталога в котором хранится кеш
define('LOGS_ROOT', APP_PATH.DS.'temp'.DS.'logs'); # Указываем в переменную LOGS_ROOT путь до каталога в котором хранятся логи посещений
define('TEMP', APP_PATH.DS.'temp'); # указываем в переменную TEMP путь до каталога temp в котором хранятся папка cache и logs

define('TABLE_PREFIX',''); # Задаём префикс таблицы как пустую переменную
define('SERVER','http://YourDomainName.ru') # Указываем в переменную SERVER имя нашей страницы
ini_set('session.cookie_lifetime', 0) # session.cookie_lifetime указывает время жизни cookies отправляемого в браузер клиента, в секундах.
# Значение 0 означает, что cookies будут валидны до закрытия браузера.

include_once APP_PATH.DS.'config'.DS.'bootstrap.php'; # подключаем bootstrap.php файл.
?>