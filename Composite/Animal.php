<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 05.08.2019
 * Time: 12:58
 */

abstract class Animal
{
    protected $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    abstract public function add (Animal $animal);
    abstract public function remove (Animal $animal);
    abstract public function display ();

}