<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 05.08.2019
 * Time: 13:35
 */

class Kingdom extends Main
{
    private $children = [];

    public function add(Animal $animal)
    {
        $this->children[$animal->description] = $animal;
    }

    public function remove(Animal $animal)
    {
        unset($this->children[$animal->description]);
    }

    public function display()
    {
        echo 'Царство: ' . $this->description . PHP_EOL;
        foreach ($this->children as $child) {
            $child->display();
        }
    }

}