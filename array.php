<?php
	$sentence = "Hello world !";
	$tab = array(rand(0,40),rand(0,40),rand(0,40),rand(0,40),rand(0,40));
	echo $sentence[4];
	echo "<br>";
	print_r($tab);
	echo "<br><br>";
	$tab2 = array();
	for ($i=0;$i<count($tab);$i++){
		if($tab[$i]%2 == 0){
			array_push($tab2, $tab[$i]);
		}
	}
	print_r($tab2);
?>