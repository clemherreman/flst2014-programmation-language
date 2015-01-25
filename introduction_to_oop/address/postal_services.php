<?php
require __DIR__.'/Address.php';

$address = new Address(41, 'rue', 'du port', '59800', 'Lille');

echo <<<STRING
French postal services:

{$address->formatForFrenchPostalService()}
//
//UK postal services:
//
//{$address->formatForUkPostalService()}

STRING;
