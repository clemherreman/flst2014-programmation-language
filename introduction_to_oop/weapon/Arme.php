<?php
abstract class Arme
{
    protected $munitions;

    abstract public function tire();

    public function projectilesRestant()
    {
        return $this->munitions;
    }
}