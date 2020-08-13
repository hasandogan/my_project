<?php
namespace Model;

class BattleResult implements \ArrayAccess
{
    private $usedJediPower;

    private $winingShip;

    private $losingShip;

    public function __construct($usedJediPower, AbstractShip $winingShip = null, AbstractShip $losingShip = null)
    {
        $this->usedJediPower = $usedJediPower;
        $this->winingShip = $winingShip;
        $this->losingShip = $losingShip;
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

    public function offsetExists($offset)
    {
       return property_exists($this, $offset);
    }

    public function offsetGet($offset)
    {
      return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
      unset($this->$offset);
    }


}