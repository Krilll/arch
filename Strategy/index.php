<?php

require_once 'MainPayment.php';
require_once 'User.php';
spl_autoload_register(function ($class) {
    include 'Payment/'.$class.'.php';
});

$user = new User;

$user->choosePayment(1000, 'kiwi');
$user->choosePayment(1200, 'card');
$user->choosePayment(990, 'webMoney');
$user->choosePayment(1100, 'yandex');