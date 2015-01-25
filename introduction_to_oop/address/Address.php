<?php
class Address 
{
    private $number;
    private $wayType;
    private $wayName;
    private $zipcode;
    private $city;

    public function __construct($number, $wayType, $wayName, $zipcode, $city)
    {
        $this->number = $number;
        $this->wayType = $wayType;
        $this->wayName = $wayName;
        $this->zipcode = $zipcode;
        $this->city = $city;
    }

    public function formatForFrenchPostalService()
    {
        return <<<STRING
{$this->number}, {$this->wayType} {$this->wayName}
{$this->zipcode} - {$this->city}

STRING;
    }
//
//    public function formatForUkPostalService()
//    {
//        $CITY = strtoupper($this->city);
//        return <<<STRING
//{$this->number} {$this->wayType} {$this->wayName}
//{$CITY}
//{$this->zipcode}
//STRING;
//
//    }
}

