<?php
require __DIR__.'/../vendor/autoload.php';

$shapes = [
   [
       'type' => 'circle', 'params' => ['radius' => 3]
   ],
   [
        'type' => 'square', 'params' => ['length' => 5]
   ]
];

foreach($shapes as $shape) {
    $shapeObj = ShapeFactory::create($shape['type'], $shape['params']);
    $shapeObj->draw();
}