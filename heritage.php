<?php

define('BR',"<br>");
// Création de la class

class Animal {
    
    // Définition des propriétés
    public $_name;
    private $_race;
    protected $_test;
    const TYPE = "Animal";
    
    // Définition du constructeur
    public function __construct($name) {
        $this->_name = $name;
    }
    
    public function type(){
        return "I'm an ".self::TYPE." which is a ".$this::TYPE." and my";
    }
    
    public function species(){
        return $this::TYPE;
    }
    
    // Setter $_race
    public function setRace($race){
        $this->_race = $race;
    }
    // Getter $_race
    public function getRace(){
        return $this->_race;
    }
    
    public function sound(){
        echo $this->_name." doing ".$this::$CRIE;
    }
}

// Création de la class Dog
class Dog extends Animal {
    
    // Définition des propriétés
    const TYPE = "Dog";
    // static permet de ne pas avoir à instancier la classe pour accéder à la variable
    static public $CRIE = "Wouaff";
    
    public function eat(){
        echo "I'm a ".self::TYPE." which have for name ".$this->_name." and which eat croket !";
    }
    public function test(){
        $this->_test = "Test réussi !";
    }
}

// Création de la class Cat
class Cat extends Animal {
    
    // Définition des propriétés
    const TYPE = "Cat";
    static public $CRIE = "Miaouu";

    public function eat(){
        echo "I'm a ".self::TYPE." which have for name ".$this->_name." and which eat fish !";
    }


}

// Instanciation 
$dog = new Dog("Boby");
$dog->eat();
$dog->setRace("Malinois");
echo BR;
echo $dog->type()." race is ".$dog->getRace().".";
echo BR;
$dog->sound();
echo BR;
echo "Le bruit du ".$dog->species()." est ".$dog::$CRIE;
echo BR;

echo BR.BR;
$cat = new Cat("Laya");
$cat->eat();
$cat->setRace("Angorra");
echo BR;
echo $cat->type()." race is ".$cat->getRace().".";
echo BR;
$cat->sound();
echo BR;
echo "Le bruit du ".$cat->species()." est ".$cat::$CRIE;
?>

