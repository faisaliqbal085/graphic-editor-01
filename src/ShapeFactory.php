<?php

class ShapeFactory
{
    private static $possibleTypes = ['circle', 'square'];

    public static function create(String $type, $params)
    {
        if(!in_array($type, static::$possibleTypes)){
            throw new InvalidArgumentException("Invalid shape type");
        }

        $shapeClassname = ucwords($type);
        $shapeClass = new $shapeClassname($params);

        return $shapeClass;
    }
}