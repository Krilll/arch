<?php
class Adapter extends Library
{

    protected function areaCircle()
    {
        $areaSquare = parent::areaSquare();
        return (pi() * $areaSquare)/4;
    }

    protected function shoot()
    {
        return parent::udarit();
    }
    protected function win()
    {
        return parent::pobeda();
    }
    protected function lose()
    {
        return parent::proigrish();
    }
}
