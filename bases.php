<?php
/**
*@author Samir
*@license http://www.php.net/license/3_01.txt PHP License 3.01
*@version 1.0
*/
// LEs bases :
// Affichage d'un array

$tab = array();

for($i=0;$i<=5;$i++){
	array_push($tab, $i);
}
echo "Affichage avec print_r : ";
echo "<br>";
print_r($tab);
echo "<br>";
echo "Affichage avec echo : ";
echo "<br>";
for($i=0;$i<=5;$i++){
	echo $tab[$i];
}

// Caractères spéciaux 
/*
\n 	Fin de ligne (LF ou 0x0A (10) en ASCII)
\r 	Retour à la ligne (CR ou 0x0D (13) en ASCII)
\t 	Tabulation horizontale (HT or 0x09 (9) en ASCII)
\v 	Tabulation verticale (VT ou 0x0B (11) en ASCII) (depuis PHP 5.2.5)
\e 	échappement (ESC or 0x1B (27) en ASCII) (depuis PHP 5.4.4)
\f 	Saut de page (FF ou 0x0C (12) en ASCII) (depuis PHP 5.2.5)
\\ 	Antislash
\$ 	Signe dollar
\" 	Guillemet double
*/

// Différence d'un affichage avec echo, print, print_r,print_f,sprintf
echo "<br>";
$nom = "Samir";
$txt = sprintf("Bonjour %s, comment ça va ?",$nom);
echo "Affichage avec sprintf :";
echo "<br>";
printf("Bonjour %s, comment ça va ?",$nom);
echo "<br>";
echo "Affichage avec printf :";
echo "<br>";
print $txt;
echo "<br>";
echo "test de : $txt";
echo "<br>";
echo "test de : ".$txt." \r reviens à la ligne";
echo "<br>";
echo "<br>";
echo <<<'EOT' Bonjour ca va EOT;
?>