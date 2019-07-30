<?php


abstract class AbstractLabel
{
    public function __construct()
    {
        $this->render();
    }

    abstract public function render() ;
}