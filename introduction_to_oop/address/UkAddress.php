<?php
require_once __DIR__.'/Address.php';

class UkAddress extends Address
{
    public function formatForPostalService()
    {
        $CITY = strtoupper($this->city);
        $formattedAddress = <<<STRING
{$this->number} {$this->wayName} {$this->wayType} <br>
{$CITY} <br>
{$this->zipcode}

STRING;

        return $formattedAddress;
    }
}

$addr = new UkAddress(23, 'lane', 'Penny', '2AAC 7A', 'London');
echo $addr->formatForPostalService();