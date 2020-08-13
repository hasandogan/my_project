<?php


namespace Model;


trait setttableJediFactorTrait
{
    private $jediFactor = 0;

    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor(int $jediFactor): void
    {
        $this->jediFactor = $jediFactor;
    }

}