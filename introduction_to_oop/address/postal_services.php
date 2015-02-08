<?php
require_once __DIR__.'/Address.php';
require_once __DIR__.'/FrenchAddress.php';
require_once __DIR__.'/UkAddress.php';

$addresses = array(
    new UkAddress(23, 'circus', 'Piccadilly', 'W1D', 'London'),
    new FrenchAddress(41, 'rue', 'du port', '59800', 'Lille'),
    new UkAddress(10, 'street', 'Downing', 'SW1A 2AA', 'London')
);

foreach($addresses as $addr) {
    echo $addr->formatForPostalService().PHP_EOL;
}


