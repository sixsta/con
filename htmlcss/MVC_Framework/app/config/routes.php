<?php 
$router = Routing_Router::instance(); # создаём объект класса Router_Routing

#$router->connect('page/(\d*)','Pages/index/$1');


$r = explode('/', $_SERVER['REQUEST_URI']); # строка $route разбивается на подстроки по разделетилю /
array_shift($r); # извлекаем первое значение массива, сокращая его размер на 1 элемент.
$route->connect($r[0],'Pages/'.$r[0]); 
$route->connect($r[0].'/(.*)','Pages/'.$r[0].'/$1');

$route->connect('','Pages/start'); # настраивание путей

unset($route); # удаление переменной route
?>