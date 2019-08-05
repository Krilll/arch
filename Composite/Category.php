<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 05.08.2019
 * Time: 13:35
 */

class Category extends Kind
{
    private $children = [];

    public function add(Animal $animal)
    {
        $this->children[$animal->description] = $animal;
    }

    public function display()
    {
        echo 'Вид: ' . $this->description . PHP_EOL . PHP_EOL;
    }
}