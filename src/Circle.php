<?php


class Circle implements ShapeInterface
{
    public function __construct($params)
    {
        $this->radius = $params['radius'];
    }

    public function draw()
    {
        try {
            // code to draw graphical circle can replace this try block
            echo " - draw circle -\n";
            return true;
        } catch (\Exception $exception){
            //log exception to some file or stream
            return false;
        }
    }
}