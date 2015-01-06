<?php
	$texte = file_get_contents("pays.txt");
	$tab_mots = tokenisation("\n", $texte); 
        
        $rand_keys = array();
        $band_keys1 = array();
         $rand_afficher = array();
         
       for($i = 0 ; $i < count($tab_mots); $i++) {
           
              $band_keys1 =  $tab_mots[mt_rand (0, count($tab_mots)-1)];
               
              //var_dump(rtrim($band_keys1));
               $rand_afficher = substr(rtrim($band_keys1) , -1);
             //  var_dump($rand_afficher);
//var_dump(substr($band_keys1 ,0,strlen($band_keys1)));
            if($rand_afficher =='e'){
               // Combodge,Mexique,Mozambique, Zaïre Zimbabwe
                if( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Mexique' ) 
                     or (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Combodge' )
                     or (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Mozambique' )
                     or  (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Zaïre Zimbabwe' )
                  )  
                {
                    echo "au_"  .(substr($band_keys1 ,0,strlen($band_keys1)))  .  "<br>";
                    
                }
                else
                 echo "en_"  .substr($band_keys1 , 0,strlen($band_keys1)) .   "<br>";
             }
             else {
                 echo "au_"  .substr($band_keys1 ,0,strlen($band_keys1))  .  "<br>";
             }         
           
        }
  
        
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
			echo  $valeur. "<br>";
                        $i++;
		}
	}

?>