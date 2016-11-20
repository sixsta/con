<?php
    require_once 'PHP/Autoload.php';
    require_once 'PEAR/NameScheme.php';
# подключаем нужные файлы
    class PEAR_NameScheme_Autoload{ # создаём класс
        static function classAutoloader($classname){ # описываем функицю
            $fname = PEAR_NameScheme::name2path($classname); # записываем в переменную fname путь к файлу
            if($f = @fopen($fname, "r", true)){ # открываем на чтение с проверкой на возможность открытия
                fclose($f); # закрываем
                return include_once ($fname); # подключаем файл
            }
            return false; # возвращаем false
        }
    }

    PHP_Autoload::register(array("PEAR_NameScheme_Autoload", "classAutoloader")); # регистрирует функцию в обработчик

