<?php
require_once __DIR__ . '/lib/Model/AbstractShip.php';
require_once __DIR__ . '/lib/Model/ship.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';



/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */


