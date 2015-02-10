<?php
require_once __DIR__.'/Arme.php';
class Mitrailleuse extends Arme
{
    public function __construct()
    {
        $this->munitions = 30;
    }
    public function tire()
    {
        echo "Blam Blam Blam! <br>";
        $this->munitions = $this->munitions - 3;
    }
}