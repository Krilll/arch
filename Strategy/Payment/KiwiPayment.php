<?php

class KiwiPayment implements iPayment
{
    public function pay (int $cost)
    {
        echo 'Оплата через kiwi резинового жирафа стоимостью ' . $cost . PHP_EOL;
        return 'Оплата через kiwi прошла успешно!' . PHP_EOL;
    }
}