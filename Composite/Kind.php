<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 05.08.2019
 * Time: 13:35
 */

class Kind extends Family
{
    private $children = [];

    public function add(Animal $animal)
    {
        $this->children[$animal->description] = $animal;
    }

    public function display()
    {
        echo 'Род: ' . $this->description . PHP_EOL;
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}