<?php
	$texte = file_get_contents("pays.txt");
	$tab_mots = tokenisation("\n", $texte); 
        
	
	print_tab($tab_mots);
	
	function tokenisation($separateurs, $texte) 
	{
		$arrayElements = array();
		
		$tok = strtok($texte, $separateurs);
		
		while ($tok !== false)  
		{
			if(strlen($tok) > 2) $arrayElements[] = $tok;
			$tok = strtok($separateurs);
		}
		return $arrayElements; 
	}
	
	//Afficher un tableau
	function print_tab($tab_mots) 
	{
		foreach($tab_mots as $valeur) 
		{
			echo  $valeur, "<br>"; 
		}
	}

?>