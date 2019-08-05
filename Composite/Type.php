<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 05.08.2019
 * Time: 13:35
 */

class Type extends Kingdom
{
    private $children = [];

    public function add(Animal $animal)
    {
        $this->children[$animal->description] = $animal;
    }
    public function display()
    {
        echo 'Тип: ' . $this->description . PHP_EOL;
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}