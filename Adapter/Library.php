<?php
class Library
{

    protected $length;

    protected function __construct($length)
    {
        $this->length = $length;
    }

    protected function areaSquare() {
        return $this->length * $this->length;
    }
    protected function udarit()
    {
        return 'Удар!';
    }
    protected function pobeda()
    {
        return 'Победа !';
    }
    protected function proigrish()
    {
        return 'Вы проиграли !';
    }
}