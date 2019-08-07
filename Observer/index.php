<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$worker1 = new Workman();
$worker1->setWorkman('Lion', 'Lion@main.ru', 10);
$worker2 = new Workman();
$worker2->setWorkman('Const', 'Const@main.ru', 4);
$worker3 = new Workman();
$worker3->setWorkman('Publ', 'Publ@main.ru', 6);

Subscription::getSubscribe()->subscribe($worker1);
Subscription::getSubscribe()->subscribe($worker2);

$work = new Work('Крутая работа!!!');

Subscription::getSubscribe()->unsubscribe($worker2);

$work2 = new Work('Крутая работа 2!!!');