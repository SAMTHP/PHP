<?php
// Variable de type tableau
$tableau = ["Pomme","Pate","Crème"];

// 1. Créer un tableau avec tous les titres
define('ARTICLES',"Articles"); //Définition de la constante ARTICLES
define('PRIX',"Prix"); //Définition de la constante PRIX
define('QUANTITE',"Quantité"); //Définition de la constante QUANTITE
define('TOTAL',"Total"); //Définition de la constante TOTAL
$tabHead = [ARTICLES,PRIX,QUANTITE,TOTAL];

// 2. Créer un tableau par ligne
$tabPomme = ["Pomme",5,2,10];
$tabPate = ["Pate",2.50,2,5];
$tabCreme = ["Crème",1.50,1,1.50];

// Tableau multidimensionnel
$tabProduits = [$tabPomme,$tabPate,$tabCreme];

// Affiche les éléments du tableau
//echo $tableau [2]

/*
echo "Articles prix quantité  total"."</br>";
echo "Pomme       5        2    10 "."</br>";
echo "Pâte     2.50        2     5 "."</br>";
echo "Crème    1.50        1   1.5 "."</br>";
*/

?>
<h1>Tableau  grâce au PHP </h1>
<table>
      <thead>
             <tr> 
                  <th><?php echo $tabHead[0]; ?></th>
                  <th><?php echo $tabHead[1]; ?></th>
                  <th><?php echo $tabHead[2]; ?></th>
                  <th><?php echo $tabHead[3]; ?></th>
             </tr>
      </thead>
             
      <tbody>
            <tr>
                  <td><?php echo $tabProduits[0][0]; ?></td>
                  <td><?php echo $tabProduits[0][1]; ?></td>
                  <td><?php echo $tabProduits[0][2]; ?></td>
                  <td><?php echo $tabProduits[0][3]; ?></td>
             </tr>
             <tr>
                  <td><?php echo $tabProduits[1][0]; ?></td>
                  <td><?php echo $tabProduits[1][1]; ?></td>
                  <td><?php echo $tabProduits[1][2]; ?></td>
                  <td><?php echo $tabProduits[1][3]; ?></td>
             </tr>
             <tr>
                  <td><?php echo $tabProduits[2][0]; ?></td>
                  <td><?php echo $tabProduits[2][1]; ?></td>
                  <td><?php echo $tabProduits[2][2]; ?></td>
                  <td><?php echo $tabProduits[2][3]; ?></td>
             </tr>

      </tbody>
</table>
<h1>Tableau fait par moi avec des boucles</h1>
<table>
      <thead>
            <?php
            echo "<tr>";
            for($i=0;$i<count($tabHead);$i++){
                  echo "<th>".$tabHead[$i]."</th>";
            }
            echo "</tr>";
            ?>
      </thead>
      <tbody>
            <?php
            for($i=0;$i<count($tabProduits);$i++){
                  echo "<tr>";
                  for($i=0;$i<count($tabProduits[0]);$i++){
                        echo "<td>".$tabProduits[0][$i]."</td>";
                  }
                  echo "</tr>";
                  echo "<tr>";
                  for($i=0;$i<count($tabProduits[1]);$i++){
                        echo "<td>".$tabProduits[1][$i]."</td>";
                  }
                  echo "</tr>";
                  echo "<tr>";
                  for($i=0;$i<count($tabProduits[2]);$i++){
                        echo "<td>".$tabProduits[2][$i]."</td>";
                  }
                  echo "</tr>";
            }
            ?>
      </tbody>
</table>
<h1>Tableau fait avec des boucles via le tuto</h1>