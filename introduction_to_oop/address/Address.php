<?php
abstract class Address
{
    protected $number;
    protected $wayType;
    protected $wayName;
    protected $zipcode;
    protected $city;

    public function __construct($number, $wayType, $wayName,
                                $zipcode, $city)
    {
        $this->number = $number;
        $this->wayType = $wayType;
        $this->wayName = $wayName;
        $this->zipcode = $zipcode;
        $this->city = $city;
    }

    abstract public function formatForPostalService();
}


