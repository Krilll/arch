<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$user = new User();

//выполнение команд
$user->runCommand('copy', 2,5);
$user->runCommand('insert', 5,7);
$user->runCommand('cut', 8,10);

$user->down(3);
$user->up(3);
