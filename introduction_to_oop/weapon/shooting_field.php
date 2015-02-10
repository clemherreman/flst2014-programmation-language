<?php
require_once __DIR__.'/Pistolet.php';
require_once __DIR__.'/Mitrailleuse.php';
require_once __DIR__.'/LanceRoquette.php';

$p1 = new Pistolet();
$p2 = new Pistolet();
$m = new Mitrailleuse();
$lr = new LanceRoquette();
$p1->tire();
$m->tire();
$m->tire();
$lr->tire();
$p1->tire();
echo $p1->projectilesRestant().'<br>';
echo $lr->projectilesRestant().'<br>';
