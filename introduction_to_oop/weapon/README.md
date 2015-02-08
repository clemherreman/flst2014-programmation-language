Il y a 3 fusils différents : 

* Le pistolet
* La mitrailleuse
* Le lance-roquette

Les fusils ont tous une capacité limitée de projectiles. Ils ont tous un bruit différent, de "piou piou" pour le pistolet, au "BOOM !" du lance-roquette. Ils ont égalemement un nom différent.

Le pistolet à 8 balles de capacité, la mitrailleuse 30 et le lance-roquette 1.

La mitrailleuse tire 3 balles à la fois.

Je veux pouvoir choisir quelques armes, les faire tirer dans l'ordre qui m'interesse, et avoir à la fin le nombre de balles restant dans chaque arme que j'ai choisie.

```
$p1 = new Pistolet();
$p2 = new Pistolet();
$m = new Mitrailleuse();
$lr = new LanceRoquette();

$p1->tire();
$m->tire();
$m->tire();
$lr->tire();
$p1->tire();
$lr->tire();

echo $p1->projectilesRestant();
echo $lr->projectilesRestant();
```

```
Piou!
Blam blam blam!
Blam blam blam!
BOOM!
Piou!
Clic clic…
6
0
```