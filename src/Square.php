<?php

class Square implements ShapeInterface
{
    public function __construct($params)
    {
        $this->length = $params['length'];
        $this->origin = $params['origin']??[0,0] ;  
    }

    public function draw()
    {
        try {
            // code to draw graphical square can replace this block
            echo "- draw square -\n";
            return true;
        } catch (\Exception $exception){
            //log exception to some file or stream
            return false;
        }
    }
}