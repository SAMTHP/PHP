<?php
	$tab = array("French"=>"Paris","Morocco"=>"Rabat","Iran"=>"Teheran","ArabiaMaudite"=>"Neom","USA"=>"Babylon");
	print_r($tab);
	$i = 0;
	while ( $i <= count($tab)) {
		if(strpos($tab[$i], "r")){
			echo $tab[$i];
		}
		$i++;
	}
?>