<?php
require_once __DIR__.'/Arme.php';
class LanceRoquette extends Arme
{
    public function __construct()
    {
        $this->munitions = 1;
    }
    public function tire()
    {
        echo "BOOM! <br>";
        $this->munitions--;
    }
}