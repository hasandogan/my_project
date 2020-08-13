<?php
require_once __DIR__ . '/lib/Ship.php';

function printShipSummary($someShip){
    echo 'Ship name:'. $someShip->name;
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);

}
$myShip = new Ship('jedi starship');
$myShip->setWeaponPower(10);


$otherShip = new Ship ('Imperial Shuttle');
$otherShip->setWeaponPower(5);
$otherShip->setStrength(30);
printShipSummary($myShip);
echo '<hr/>';
printShipSummary($otherShip);

if($myShip->doesGivenShipHaveMoreStrength($otherShip)){
    echo $otherShip->getName(). 'has more strength';
}else{
    echo $myShip->getName(). 'has more strength';

}