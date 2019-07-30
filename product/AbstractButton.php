<?php


abstract class AbstractButton
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->render($name);
    }

    abstract public function render($name):int ;
}