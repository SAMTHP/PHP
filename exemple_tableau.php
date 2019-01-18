<?php

// 1. Créer un tableau avec tous les titres
define('ARTICLES',"Articles"); //Définition de la constante ARTICLES
define('PRIX',"Prix"); //Définition de la constante PRIX
define('QUANTITE',"Quantité"); //Définition de la constante QUANTITE
define('TOTAL',"Total"); //Définition de la constante TOTAL

// Tableau contenant les constantes
$tabHead = [ARTICLES,PRIX,QUANTITE,TOTAL];

// 2. Créer un tableau par ligne
$tabPomme = ["Pomme",5,2,10];
$tabPate = ["Pate",2.50,2,5];
$tabCreme = ["Crème",1.50,1,1.50];

// Tableau multidimensionnel
$tabProduits = [$tabPomme,$tabPate,$tabCreme];

function enTete(){
      global $tabHead;
      echo "<tr>";
      for($i=0;$i<count($tabHead);$i++){
            echo "<th>".$tabHead[$i]."</th>";
      }
      echo "</tr>";
}

function body(){
      global $tabHead;
      global $tabProduits;
      for($h=0;$h<count($tabProduits);$h++){
            echo "<tr>";
            for($i=0;$i<count($tabHead);$i++){
                  echo "<td>".$tabProduits[$h][$i]."</td>";
            }
            echo "</tr>";
      }
}

function panier (){
      echo "<h1>Tableau simplifié grâce aux fonctions qui contiennent des boucles</h1>";
      echo "<table>";
            echo "<thead>".enTete()."</thead>";
            echo "<tbody>".body()."<tbody>";
      echo "</table>";
}

// Appel du panier
panier();
?>