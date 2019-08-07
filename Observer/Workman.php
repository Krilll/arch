<?php

require_once 'Subscription.php';

class Workman implements Subscriber
{
    public $name;
    public $email;
    public $experience;

    public function setWorkman($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    function notify($text, $workman)
    {
        echo 'Уведомление о новой работе "'. $text . '" отправлено пользователю '. $workman->name .
            ' на почту ' . $workman->email . PHP_EOL;
    }
}