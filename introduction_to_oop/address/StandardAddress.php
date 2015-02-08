<?php
class StandardAddress
{
    private $number;
    private $wayType;
    private $wayName;
    private $zipcode;
    private $city;

    public function __construct($number, $wayType, $wayName,
                                $zipcode, $city)
    {
        $this->number = $number;
        $this->wayType = $wayType;
        $this->wayName = $wayName;
        $this->zipcode = $zipcode;
        $this->city = $city;
    }

    public function formatForPostalService()
    {
        $formattedAddress = <<<TUTU
{$this->number}, {$this->wayType} {$this->wayName} <br />
{$this->zipcode} - {$this->city}

TUTU;

        return $formattedAddress;

    }
}

$addr = new Address(41, 'rue', 'du Port', 59800, 'Lille');
echo $addr->formatForPostalService();