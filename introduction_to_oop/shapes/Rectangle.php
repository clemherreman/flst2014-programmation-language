<?php

class Rectangle
{
    private $long;
    private $larg;

    public function __construct($long, $larg)
    {
        $this->long = $long;
        $this->larg = $larg;
    }

    public function calculPerimetre()
    {
        return ($this->long + $this->larg) * 2;
    }

    public function calculAire()
    {
        return $this->long * $this->larg;
    }

}

echo "Rectangle 4x5".'<br />';
$rec = new Rectangle(4, 5);
echo "Perimetre: " . $rec->calculPerimetre(). '<br />';
echo "Aire: " . $rec->calculAire(). '<br />';

















