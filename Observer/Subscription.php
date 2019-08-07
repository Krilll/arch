<?php

class Subscription
{
    private $subscriber = [];
    private $work;

    private static $instance = null;


    public function newWork($work) {
        $this->work = $work;
        $this->notifySubscribers();
    }

    public static function getSubscribe() {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function notifySubscribers() {
        foreach ($this->subscriber as $subscribe) {
            $subscribe->notify($this->work, $subscribe);
        }
    }

    public function subscribe(Workman $workman) {
        $this->subscriber[] = $workman;
    }

    public function unsubscribe(Workman $workman) {

        $key = array_search($workman, $this->subscriber);
        unset($this->subscriber[$key]);
    }
}