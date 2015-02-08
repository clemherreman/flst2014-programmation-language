<?php
class Circle 
{
    private $r;

    public function __construct($rayon)
    {
        $this->r = $rayon;
    }

    public function perimetre()
    {
        return 2 * pi() * $this->r;
    }

    public function calculAire()
    {
        return pi() * pow($this->r, 2);
    }
}

$c = new Circle(3);
echo $c->perimetre();
