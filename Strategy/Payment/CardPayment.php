<?php

class CardPayment implements iPayment
{
    public function pay (int $cost)
    {
        echo 'Оплата картой резинового жирафа стоимостью ' . $cost . PHP_EOL;
        return 'Оплата картой прошла успешно!' . PHP_EOL;
    }
}