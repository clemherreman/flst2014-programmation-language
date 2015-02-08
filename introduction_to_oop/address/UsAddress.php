<?php
require_once __DIR__.'/Address.php';

class UsAddress extends Address
{
    private $state;

    public function __construct($state, $number, $wayType, $name,
                                $zip, $city)
    {
        parent::__construct($number, $wayType, $name, $zip, $city);
        $this->state = $state;
    }

    public function formatForPostalService()
    {
        echo <<<STRING
{$this->number} {$this->wayName} {$this->wayType} <br>
{$this->city}, {$this->state} <br>
{$this->zipcode}
STRING;

    }
}

$addr = new UsAddress('CA', 13, 'bld', 'Sunset',
    '25353', 'Los Angeles');
echo $addr->formatForPostalService();