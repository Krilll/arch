<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 07.08.2019
 * Time: 1:44
 */

class User
{
    public $answer;

    public function choosePayment($cost, $how)
    {
        $payment = new MainPayment();

        switch($how) {
            case MainPayment::CONST_PAYMENT_KIWI:
                $answer = $payment->mainPay(new KiwiPayment(), $cost);
                break;
            case MainPayment::CONST_PAYMENT_CARD: ;
                $answer = $payment->mainPay(new CardPayment(), $cost);
                break;
            case MainPayment::CONST_PAYMENT_WEB_MONEY:
                $answer = $payment->mainPay(new WebMoneyPayment(), $cost);;
                break;
            case MainPayment::CONST_PAYMENT_YANDEX:
                $answer = $payment->mainPay(new YandexPayment(), $cost);;
                break;
            default: $answer = 'Выбранный вами метод оплаты не сущесвует.';
        }

        echo $answer . PHP_EOL . PHP_EOL;
    }
}