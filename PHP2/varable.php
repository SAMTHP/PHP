<?php

$r = "<br>";

// Tableau indexé
$tab = ["Bonjour","tous le","monde"];

// Affichage du tableau par ses index
echo "Tableau indexé : ".$tab[0]." ".$tab[1]." ".$tab[2].$r;
echo $r;

// Tableau associatif (key, value)
$tabAsso = ["Key"=>"Value",45 => "Number"];
echo "Tableau key, value : ".$tabAsso["Key"].$r;
echo $r;

$maVar = "test";
$spBool= "Vrai";

$tab1 = [1,2,3,"toto","titi"];
$tabA = ["key1"=>1,"key2"=>"deux","key3"=>$maVar];
$tab2 = [4,"tutu",$maVar,$tab1,$tabA];


echo "Tableau 2 : ".$r;
print_r($tab2);
echo $r;
echo $r;

echo "Tableau 2 à l'index 3 : ".$r;
print_r($tab2[3]);
echo $r;
echo $r;

echo "Tableau 2 à l'index 3, puis index 3 contenu dans le tableau 1 : ".$r;
echo 'Code = $tab2[3][3] : '.$tab2[3][3];
echo $r;
echo $r;

echo "Tableau 2 à l'index 4, puis la key3 dans le tabA : ".$r;
echo 'Code = $tab2[4]["key3"] : '.$tab2[4]["key3"];
echo $r;
echo $r;

// les échappements 
$varT = 1.161;
echo "<div class=\"test\">Mon titre est : \"L'article du jour\" et c'est trop top ma variable \$varT vaut $varT </div>";

?>