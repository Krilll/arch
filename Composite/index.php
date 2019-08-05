<?php
/**
 * Created by PhpStorm.
 * User: 805621
 * Date: 05.08.2019
 * Time: 13:28
 */


require_once 'Animal.php';
require_once 'Main.php';
require_once 'Kingdom.php';
require_once 'Type.php';
require_once 'Form.php';
require_once 'Group.php';
require_once 'Family.php';
require_once 'Kind.php';
require_once 'Category.php';



$main = new Main('');

$cat = new Kingdom('Животные');
$cat->add(new Type('Хордовые'));
$cat->add(new Form('Млекопитающие'));
$cat->add(new Group('Хищные'));
$cat->add(new Family('Кошачьи'));
$cat->add(new Kind('Кошка'));
$cat->add(new Category('Манул'));


$group = new Kingdom('Животные');
$group->add(new Type('Хордовые'));
$group->add(new Form('Млекопитающие'));
$group->add(new Group('Хищные'));

$dog = new Family('Псовые');
$dog->add(new Kind('Волк'));
$dog->add(new Category('Динго'));
$dog->add(new Kind('Лисицы'));
$dog->add(new Category('Рыжая лисица'));

$coon = new Family('Енотовые');
$coon->add(new Kind('Енот'));
$coon->add(new Category('Енот-полоскун'));


$main->add($cat);
$main->display();
$main->add($group);
$main->add($dog);
$main->add($coon);
$main->display();
