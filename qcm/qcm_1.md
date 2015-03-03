# Questionnaire #1
Distribué le 11-02-2015

## Evaluation 

* Une bonne réponse apporte 1 point.
* Une absence ou une mauvaise réponse apporte 0 point.

Chaque question à choix multiples peut avoir une ou plusieurs bonne réponse. Veuillez entourer la ou les réponses que vous jugez correctes. Toutes les réponses correctes doivent être entourées.

## Questions

Considérant la classe `Circle`ci-dessous:

```php
class Circle
{
    private $radius;

    public function __construct($rad)
    {
    	echo "Construction d'un cercle de rayon ".$rad;
        $this->radius = $rad;
    }

    public function calculPerimetre()
    {
        $perimetre = 2 * pi() * $this->radius;

        return $perimetre;
    }
}
```

#### 1. Comment est appelé `private $radius`?

* Réponse A : Un attribut
* Réponse B : Une variable
* Réponse C : Une méthode
* Réponse D : Un objet

#### 2. Que signifie `private`? A quoi sert-il ?

* Réponse :

```
 
  
   
    
     
      
      
      
      
      
     
```


#### 2. Que va afficher le code suivant ?

```
$c = new Circle(1);
echo "Perimetre : ".$c->calculPerimetre();
```

*Note: le périmetre d'un cercle de rayon 1 est 6.28*

* Réponse :

```
 
  
   
    
     
      
     
```

#### 3. Que représente `$this` au sein d'une classe comme `Circle` ?

* Réponse :

```
 

     
     
     
     
     
     
      
     
```

#### 4. La programmation orientée-objet...

* Réponse A : ...est une philosophie de design.
* Réponse B : ...a pour but d'aider le developpeur à créer une application en introduisant des analogies provenant de la vie reelle.
* Réponse C : ...est la meilleure façon de développer une application.
* Réponse D : ...consiste à imbriquer du code dans des objets orientés.

#### 5. Une classe a pour but de...

* Réponse A : ...lancer une application avec du PHP 
* Réponse B : ...décrire le fonctionnement de tous les objets d'un même type
* Réponse C : ...décrire le fonctionnement d'une partie de l'application
* Réponse D : ...représenter un lien entre un objet et son 

#### 6. Qu'est ce qu'une méthode ?

* Réponse :

```
 
  
   
    
     
      
       
      
     
```

#### 7. `public function __construct($rad)` est appellé...

* Réponse A : ...un initialisateur
* Réponse B : ...un constructeur
* Réponse C : ...une construction
* Réponse D : ...une abstraction

#### 8. Quelle est la tache de `public function __construct($rad)` ?

* Réponse :

```
 
  
   
    
     
      
       
      
     
```