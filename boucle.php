<?php

define('BR',"<br>");
define('ST',"<strong>");
define('STD',"</strong>");

$sentence = "Je ferai attention de ne plus me fourvoyer";
$i = 0;

echo ST."Boucle While :".STD.BR;
echo 'while ($i <= 10) :'.BR;
while ($i <= 10){
	echo $i." : ".$sentence.BR;
	$i++;
}

echo BR;
echo "<hr>";
echo BR;

$i = 0;

echo ST."Boucle do While :".STD.BR;
echo 'do {}while ($i <= 10) :'.BR;
do {
	echo $i." : ".$sentence.BR;
	$i++;
}while ($i <= 10);

echo BR;
echo "<hr>";
echo BR;

echo ST."Boucle For :".STD.BR;
echo 'for ($i=0;$i<10;$i++) :'.BR;
for ($i=0;$i<10;$i++){
	echo $i." : ".$sentence.BR;
}

echo BR;
echo "<hr>";
echo BR;

$tab = ["Samir","Yasmine","Mon amour"];
echo ST."Boucle For pour parcourir un tableau indexé :".STD.BR;
echo 'for ($i=0;$i<count($tab);$i++) :'.BR;
for ($i=0;$i<count($tab);$i++){
	echo $tab[$i].BR;
}

echo BR;
echo "<hr>";
echo BR;

$tabAsso = ["Nom"=>["Samir","Yasmine","Mon amour"]];
echo ST."Boucle Foreach pour parcourir un tableau associatif :".STD.BR;
echo 'foreach ($tabAsso as $key => $value) :'.BR;
foreach ($tabAsso as $key => $value) {
	echo $key." : ".BR;
		for ($i=0;$i<count($value);$i++){
			echo $value[$i].BR;
		}
}

echo BR;
echo "<hr>";
echo BR;

?>