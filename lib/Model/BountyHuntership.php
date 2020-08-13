<?php


namespace Model;


class BountyHuntership extends AbstractShip
{

    use setttableJediFactorTrait;


    public function getType()
    {
       return 'Bounty Hunter';
    }



    public function isFunctional()
    {
        return true;
    }
}
