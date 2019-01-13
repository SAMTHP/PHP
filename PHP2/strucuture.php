<?php

define('BR',"<br>");

$test = 11;
$vie = 5;
$perte = 10;

// Structure conditionnelle
echo "<strong>Structure conditionnelle :</strong>";
echo BR;

echo '$test = '.$test.BR;
echo '$vie = '.$vie.BR;
echo '$perte = '.$perte.BR.BR;

// Comparaison d'égalité
echo "Comparaison d'égalité :";
echo BR;
echo 'if ($test == 10)'.BR;
echo "<strong>Résultat : </strong>".BR;
if ($test == 10){
	echo "La condition est vérifiée !";
} else {
	echo "La condition est false !";
}

echo BR.BR;

// Comparaison de grandeur
echo "Comparaison de grandeur :";
echo BR;
echo 'if ($test > $vie)'.BR;
echo "<strong>Résultat : </strong>".BR;
if ($test > $vie){
	echo "La condition est vérifiée !";
} else {
	echo "La condition est false !";
}

echo BR.BR;

// Comparaison de grandeur avec plusieurs conditions
echo "Comparaison de grandeur avec plusieurs conditions :";
echo BR;
echo 'if ($test > $vie)'.BR;
echo 'elseif ($test < $vie)'.BR;
echo 'else'.BR;
echo "<strong>Résultat : </strong>".BR;
if ($test > $vie){
	echo "Test est supérieur à vie";
} elseif ($test < $vie){
	echo "Test est inférieur à vie";
} else {
	echo "Test est équivaut à vie";
}

echo BR.BR;

// Les opérateurs logiques
echo "Les opérateurs logiques :";
echo BR;
echo 'ET => && ou and ou AND'.BR;
echo 'OU => || ou or ou OR'.BR;
echo 'OU exclusif => Xor ou xor'.BR;
echo 'N\'est pas => ! ou NOT ou not';

echo BR.BR;

if (true || true){
	echo "vrai ou vrai = vrai".BR;
}
if (true || false){
	echo "vrai ou false = vrai".BR;
}
if (false || false){
	echo "false ou false = faux".BR;
}
if (true xor true){
	echo "vrai ou vrai = vrai".BR;
}

?>