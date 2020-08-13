<?php
namespace Service;

interface ShipStorageInterface
{
    /**
     * @return an array of ship arrays, with keys id, name, weaponPower, strength.
     */
    public function fetchAllShipsData();

    /**
     * @param integer $id
     * @return array()
     */
    public function fetchSingleShipData($id);

}