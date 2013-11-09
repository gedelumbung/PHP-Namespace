<?php

include_once 'Car.php';
include_once 'Bmw/Car.php';
include_once 'Lamborghini/Car.php';
include_once 'Toyota/Car.php';

$car = new \Car;
$car->drive();

$bmw = new \Bmw\Car;
$bmw->drive();

$lamborghini = new \Lamborghini\Car;
$lamborghini->drive();

$toyota = new \Toyota\Car;
$toyota->drive();