<?php


namespace Service;


class LoggableShipStorage implements ShipStorageInterface
{
    private $shipStorage;

    public function __construct(ShipStorageInterface  $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    public function fetchAllShipsData()
    {
        return $this->shipStorage->fetchAllShipsData();
        $this->log(sprintf('Just fetched %s ships', count($ships)));

    }

    public function fetchSingleShipData($id)
    {
        $this->shipStorage->fetchSingleShipData($id);

    }
    private function log($message)
    {
        echo $message;
    }

}