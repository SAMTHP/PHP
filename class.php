<?php

// Création de l'objet Personne
// Déclaration de class
class Personne {
    
    // Définition des propriétés de Class (attributs)
    // Il faut définir leurs niveaux d'accessibilité (encapsulation)
    
    // Porté public
    public $name;
    public $firstname;
    // Porté protected (nécessite un lien de parenté)
    //protected $firstname;
    
    // Porté private (accessible uniquement de puis la classe
    private $age = 0;
    
    // Constructeur de classe
    public function __construct($pName, $pFirstname) {
        $this->name = $pName;
        $this->firstname = $pFirstname;
    }
    // Définition des accesseur
    
    // Méthode set qui permet de redéfinir une propriété de class
    public function setAge($num) {
        $this->age = $num;
    }
    
    // Méthode get qui permet d'accèder à une propriété de class
    public function getAge(){
        return $this->age;
    }

    // Méthode privée qui sert à rassembler le nom est le prénom
    private function myName(){
        return $this->name." ".$this->firstname;
    }
    
        // Méthode qui dit bonjour
    public function sayBonjour(){
        echo "Bonjour ".$this->myName().".";
    }
}

define('BR',"<br>");

// Instanciation de la class Personne
$personne = new Personne("Ben Salem", "Samir");

// Consommation de la class
//$personne->name = "Ben Salem";
//$personne->firstname = "Samir";
$personne->setAge(28);

$personne->sayBonjour();
echo BR;
echo "Vous avez ".$personne->getAge()." ans.";

echo BR.BR;

$personne2 = new Personne("Ben Selmane", "Yasmine");

//$personne2->name = "Ben Selmane";
//$personne2->firstname = "Yasmine";
$personne2->setAge(24);

$personne2->sayBonjour();
echo BR;
echo "Vous avez ".$personne2->getAge()." ans.";
echo BR;
$x = 0;
while($x<=7) {
$x++;
}
echo $x;
?>