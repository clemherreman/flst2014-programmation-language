# Introduction à la POO

La POO est **une philosophie de design**.
Le but est d'aider à représenter le comportement d'une application, en utilisant une analogie de choses réelles.

## Origine de la POO

Il y avait une séparation entre d'un coté les données, et de l'autre le code, agissant sur celles-ci : les fonctions.

```php
$foo = 'I am data';

// I'm a function, I do stuff
function do($stuff) {
    return $stuff + 1/2 * 4;
}
```

Un des buts de la POO est de fournir une structure de données, liant les données au code. Liant une définition de structure à un ensemble de comportement.

Par exemple, liant ce qui caractérise un étudiant, ses données (id, nom, prénom, date de naissance), à un comportement qu'on attendrait de lui (donner son age, afficher sa fiche, s'inscrire dans une école).

Exemples: 

  * [student\_procedural.php](student/student_procedural.php)
  * [student\_procedural\_age.php](student/student_procedural_age.php)
  * [student\_oop\_wrong.php](student/student_oop_wrong.php)
  * [student\_oop\_better.php](student/student_oop_better.php)

## Principes de la POO

### L'encapsulation

L'encapsulation consiste à protéger, voire interdire l'accès direct à un sous-ensemble de données, en faveur d'un accès à un nombre plus réduit de méthodes de manipulation de ces données.

Le but est de ne pas exposer (rendre publique) la façon dont les données sont représentées et manipulées **en interne**, mais de fournir au monde exterieur un accès **abstrait et controlé** à ces données, appelé le comportement.

Une analogie avec le monde réel : la voiture. Une voiture est un objet très compliqué, avec enormément de variables à l'intérieur : vitesse du moteur, debit de l'essence dans les pistons, cadençage de l'allumage des bougies, transmission du couple et de la direction, etc.\*

Mais toute cette complexité est masquée, encapsulée par le tableau de bord, le volant et les pédales. Allumer la voiture consiste à tourner la clef, et indique à la voiture que je souhaite qu'elle démarre. **C'est ensuite à la voiture de s'occuper de _comment démarrer_**. Je ne lui indique pas comment gérer les bougies, comment gérer l'alimentation en mélange air-essence, etc. Tout cela est de **sa résponsabilité**, et non de la mienne.

De cette façon, la voiture se protège de l'intervention **exterieure**, qui pourrait mettre en peril son fonctionnement **interne**.

Ce même principe est appliqué en POO, aux objets que nous créons. Imaginons que je crée un objet représentant une liste d'étudiants. Je veux que cette objet sache sauvegarder cette liste quelque part, pour plus tard, et je veux pouvoir demander à ctte objet de me fournir la liste des élèves.

```php
class StudentList 
{
    public function setStudents(array $students)
    {
        // I persist that student list somewhere
        return true; // Everything went smoothly
    }
    
    public function getAllStudents()
    {
        // I retrieve the students from somewhere, 
        // and put it into $students
        return $students;
    }
}
```

Ce que l'encapsulation assure, c'est que le jour où les élèves ne sont plus stockés dans MS Excel (Oui…), mais dans MySQL, un fichier texte, GoogleDrive… je ne verrai aucune différence.

Il est très possible qu'une implementation complète de cette classe ressemble à ceci

```php
<?php
class StudentListBis
{
    public function setStudents(array $students)
    {
        $serializedStudents = serialize($students);
        file_put_contents('student.bin', $serializedStudents);

        return true; // Everything went smoothly
    }

    public function getAllStudents()
    {
        $serializedStudents = file_get_contents('student.bin');
        $students = unserialize($serializedStudents);

        return $students;
    }
}
```

\* Etant très mauvais mécanicien, des erreurs manifestes peuvent s'être glissées dans cette analogie.

### Héritage

Soon…
