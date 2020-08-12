<?php


class BattleResult{


private $usedJediPower;

private $winingShip;

private $losingShip;

public function  __construct($usedJediPower, AbstractShip $winingShip = null, AbstractShip $losingShip= null)
{
    $this->usedJediPower = $usedJediPower;
    $this->winingShip =  $winingShip;
    $this->losingShip =  $losingShip;
}

    /**
     * @return boolean
     */
    public function wereJediPowerUsed()
    {
        return $this->usedJediPower;
    }

    /**
     * @return Ship|null
     */
    public function getWiningShip()
    {
        return $this->winingShip;
    }

    /**
     * @return AbstractShip|null
     *
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }
    public function isThereAWinner()
    {
        return $this->getWiningShip() !== null;

    }



}