<?php

class MainPayment
{
    const CONST_PAYMENT_KIWI = 'kiwi';
    const CONST_PAYMENT_CARD = 'card';
    const CONST_PAYMENT_WEB_MONEY = 'webMoney';
    const CONST_PAYMENT_YANDEX = 'yandex';

    public function mainPay (IPayment $payment, $cost) {
        echo 'Оплата начинается.' . PHP_EOL;
        return $payment->pay($cost);
    }
}