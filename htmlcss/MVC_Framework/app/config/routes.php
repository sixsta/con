<?php 
$router = Routing_Router::instance(); # ������ ������ ������ Router_Routing

#$router->connect('page/(\d*)','Pages/index/$1');


$r = explode('/', $_SERVER['REQUEST_URI']); # ������ $route ����������� �� ��������� �� ����������� /
array_shift($r); # ��������� ������ �������� �������, �������� ��� ������ �� 1 �������.
$route->connect($r[0],'Pages/'.$r[0]); 
$route->connect($r[0].'/(.*)','Pages/'.$r[0].'/$1');

$route->connect('','Pages/start'); # ������������ �����

unset($route); # �������� ���������� route
?>