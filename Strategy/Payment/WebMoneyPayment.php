<?php

class WebMoneyPayment implements iPayment
{
    public function pay (int $cost)
    {
        echo 'Оплата через web money резинового жирафа стоимостью ' . $cost . PHP_EOL;
        return 'Оплата через web money прошла успешно!' . PHP_EOL;
    }
}