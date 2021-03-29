<?php
require_once "Vehicle.php";
require_once "Truck.php";

$foodTruck= new Truck("red",4, "fuel", 1000);
$van = new Truck("white",8, "diesel", 500);
echo "\n Drive on, food truck!! : ".$foodTruck->forward();
echo "\n Brake!! food truck! : ".$foodTruck->brake();

$foodTruck->setLoad ("full");
echo "\n What's your load, food truck? ".$foodTruck->getLoad();

$van->setLoad ("in filling");
echo "\n What's your load van? ".$van->getLoad();
