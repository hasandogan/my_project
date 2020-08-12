<?php
class Container
{
    private $config;
    private $pdo;
    private $shipLoader;
    private $battlemanager;
    private $shipStorage;
    private $PdoShipStorage;
    public function __construct(array $config)
    {
        $this->config = $config;
    }
    /**
     * @return PDO
     */
    public function getPDO()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->config['db_dsn'],
                $this->config['db_user'],
                $this->config['db_pass']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }
    /**
     * @return ShipLoader
     */
    public function getShipLoader()
    {
        if($this->shipLoader === null){
           // $this->shipLoader = new ShipLoader($this->getShipStorage());
            $this->shipStorage = new JsonFileShipStorage(__DIR__.'/../../resources/ships.json');
        }
        return $this->shipLoader;
    }

    /**
     * @return PdoShipStorage
     */
    public function getShipStorage()
    {
        if($this->PdoShipStorage === null){
            $this->PdoShipStorage = new PdoShipStorage($this->getPDO());
        }
        return $this->PdoShipStorage;
    }
    public function getBattleManager(){
        if($this->battlemanager === null){
            $this->battlemanager = new battlemanager();
        }
        return $this->battlemanager;

    }


}

