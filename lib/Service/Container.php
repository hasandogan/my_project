<?php
namespace Service;
use Model\BattleResult;
use Service\battlemanager;
class Container
{
    private $config;
    private $pdo;
    private $shipLoader;
    private $battlemanager;
    private $shipStorage;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return \PDO
     */
    public function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new \PDO(
                $this->config['db_dsn'],
                $this->config['db_user'],
                $this->config['db_pass']
            );

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }

    /**
     * @return ShipLoader
     */
    public function getShipLoader()
    {
        if ($this->shipLoader === null) {
            $this->shipLoader = new ShipLoader($this->getShipStorage());
        }

        return $this->shipLoader;
    }

    /**
     * @return ShipStorageInterface
     */
    public function getShipStorage()
    {
        if ($this->shipStorage === null) {
          // $this->shipStorage = new PdoShipStorage($this->getPDO());
            $this->shipStorage = new JsonFileShipStorage(__DIR__.'/../../resources/ships.json');
            $this->shipStorage = new LoggableShipStorage($this->shipStorage);
        }

        return $this->shipStorage;
    }


    public function getBattleManager()
    {
        if ($this->battlemanager === null) {
            $this->battlemanager = new \Service\battlemanager();
        }
        return $this->battlemanager;


    }


}

