<?php
	$texte = file_get_contents("pays.txt");
	$tab_mots = tokenisation("\n", $texte); 
        
        $rand_keys = array();
        $band_keys1 = array();
       for($i = 0 ; $i < count($tab_mots); $i++) {
           
             // jaffiche bien les payes par random  
              $band_keys1 = "_" . $tab_mots[mt_rand (0, count($tab_mots)-1)] . "<br>";
              
              // mais ici quand je recupire le derniere caractere j'arrive 
               $rand_afficher = substr($band_keys1,strlen($band_keys1)-2, 1);
               
              //ici je teste  la derniere caractere 
              
           // echo $band_keys1 . " ->" . strlen(count($band_keys1)) . "<br>";
          /*   if(strcmp($rand_afficher ,"e")==0){
                 echo "en_" .  $band_keys1 . "<br>";
             }
             else {
                 echo "au_" . $band_keys1 . "<br>";
             }         
           * 
           */
        }
  
         afficher($band_keys1);
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
            $i=0;
		foreach($tab_mots as $valeur) 
		{
			echo "$i => " . $valeur. strlen($valeur). "<br>";
                        $i++;
		}
	}

?>