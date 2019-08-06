<?php

class YandexPayment implements iPayment
{
    public function pay (int $cost)
    {
        echo 'Оплата через yandex резинового жирафа стоимостью ' . $cost . PHP_EOL;
        return 'Оплата через yandex прошла успешно!' . PHP_EOL;
    }
}