<?php
error_reporting(E_ALL ^ E_NOTICE); # ”казываем какие ошибки попадут в отчЄт

$cnf = Config::instance();
$cnf->set('base_uri',''); # базовый урл от которого идЄт сайт
$cnf->set('dev_mode',0);

$cnf->set('view_ext','.php'); # расширение дл€ файлов вида
$cnf->set('default_layout','default'); # шаблон по умолчанию
$cnf->set('qz_output',1); # включение сжати€
$cnf->set('errors_in_files',1); # вывод ошибок
$cnf->set('cache_lifetime',60*60*24); # максимальное врем€ жизни кеша

unset($cnf); # удачение переменной cnf
?>