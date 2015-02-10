<?php
require_once __DIR__.'/Arme.php';
class Pistolet extends Arme
{
    public function __construct()
    {
        $this->munitions = 8;
    }
    public function tire()
    {
        echo "Piou! <br>";
        $this->munitions--;
    }
}