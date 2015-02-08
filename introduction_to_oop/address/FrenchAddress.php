<?php
require_once __DIR__.'/Address.php';

class FrenchAddress extends Address
{
    public function formatForPostalService()
    {
        $formattedAddress = <<<STRING
{$this->number}, {$this->wayType} {$this->wayName} <br>
{$this->zipcode} - {$this->city}

STRING;

        return $formattedAddress;
    }
}

$addr = new FrenchAddress(41, 'rue', 'du port', 59000, 'Lille');
echo $addr->formatForPostalService();