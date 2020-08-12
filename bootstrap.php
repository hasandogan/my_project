<?php
$config = [
    'db_dsn' => 'mysql:host=localhost;dbname=my_project',
    'db_user' => 'root',
    'db_pass' => 'password',

];
require_once __DIR__ . '/lib/Model/AbstractShip.php';
require_once __DIR__ . '/lib/Model/ship.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Model/BrokenShip.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Service/PdoShipStorage.php';
require_once __DIR__.'/lib/Service/JsonFileShipStorage.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';


