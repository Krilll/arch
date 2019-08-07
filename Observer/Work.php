<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 07.08.2019
 * Time: 16:30
 */

class Work
{
    public function __construct($description)
    {
        Subscription::getSubscribe()->newWork($description);
    }
}