<?php

/**
*    Design patterns / Creational patterns / Prototype
*    Паттерны проектирования / Порождающие паттерны / Прототип
 */

include("Shape.php");

$shape = new Shape();
$shape->setName('Square');
$shape->setColor('Red');

$triangle = clone $shape;
$triangle->setName('Triangle');
$triangle->setColor('Green');

echo "<pre>";
var_dump($shape);
var_dump($triangle);
echo "</pre>";