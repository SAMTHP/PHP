<?php
	$tab = array("French"=>"Paris","Morocco"=>"Rabat","Iran"=>"TeheRan","ArabiaMaudite"=>"Neom","USA"=>"Babylon");
	// print_r($tab);
	$i = 0;
	while ( $i < count($tab)) {
		$capitale = strtolower(array_values($tab)[$i]);
		 echo strpos($capitale, "r");
		if(strpos($capitale, "r"))
		{
			print_r (array_values($tab)[$i]);
		}
		$i++;
	}
	// print_r(array_values($tab)[0]);
?>