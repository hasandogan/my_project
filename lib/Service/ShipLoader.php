<?php

class ShipLoader
{
    private $shipStorage;

    public function __construct(PdoShipStorage $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

  public function getShips()
    {
        $shipsData = $this->queryForShips();
        $ships = array();
        foreach ($shipsData as $shipData) {
            $ships [] = $this->createShipFromData($shipData);
        }
        return $ships;
    }

    /**
     * @param $id
     * @return AbstractShip
     */
    public function findOneById($id)
    {
        $shipArray = $this->shipStorage->fetchSingleShipData($id);
    }

    private function createShipFromData(array $shipData)
    {
        if ($shipData['team'] == 'rebel') {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
            $ship->setJediFactor($shipData['jedi_factor']);
        }

        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setStrength($shipData['strength']);

        return $ship;
    }

    private function queryForShips()
    {
        return $this->shipStorage->fetchAllShipsData();

    }
}

