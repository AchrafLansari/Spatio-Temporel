<?php

include 'globals.php';


function tokenization ($text,$delimiteurs,$nb_carac,$state)
        {
            $arrayElements = array();
            global $tab_mots_vides;
            $words = strtok($text,$delimiteurs);
            
            
             while ($words !== false){
                    if($state == 0){
                        $words = trim(str_replace('&nbsp','',$words));
                        $cpt = strlen($words);
                     if($cpt >= $nb_carac){
                         if (!array_key_exists($words,array_flip($tab_mots_vides)))
                             {
                                $arrayElements[]=$words;
                             }
                         }
                     
                    }else {
                        $arrayElements[]=$words;
                    }
                     $words = strtok($delimiteurs);
                 
             }
             return $arrayElements;
        }


$api_url = 'http://fr.wikipedia.org/w/api.php';


$wiki = new Wikimate($api_url);






#$wiki->setDebugMode(TRUE);
$texte = file_get_contents("Data/pays.txt");
	$tab_mots = tokenization($texte , "\n",0,1); 
        
        $rand_keys = array();
        $band_keys1 = array();
         $rand_afficher = array();
           
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
                    $paye =  "au_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ;
                    
                }
                else
                $paye = "en_"  .substr($band_keys1 , 0,strlen($band_keys1));
             }
             else {
                 if( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Cuba')){
                 $paye = "à_"  .substr($band_keys1 ,0,strlen($band_keys1));
                 }else if( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Kiribati') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Ile Christmas')  ){
                 $paye = "aux_"  .substr($band_keys1 ,0,strlen($band_keys1));
                 }
                 else {
                 $paye = "au_"  .substr($band_keys1 ,0,strlen($band_keys1));
             }
             }

            
            $pays = str_replace (" ", "_", $paye);
            
             
            
            $url_final = 'Liste_du_patrimoine_mondial_'.$pays;
            $url_final = rtrim($url_final);
            
            var_dump($url_final);echo'<br>';
            
            $page = $wiki->getPage($url_final);

// check if the page exists or not
if (!$page->exists() ) {
	echo "Page doesn't exist.\n";

} else {
        /*
	// get the page title
	echo "Title: ".$page->getTitle()."<br>";
	// get the number of sections on the page
	echo "Number of sections: ".$page->getNumSections()."<br>";
	// get an array of where each section starts and its length
	echo "Section offsets:".print_r($page->getSectionOffsets(), true)."<br>";
        
        //Statistiques de la liste du patrimoine
        //echo "<br>".$page->getSection('Statistiques');
        
        // la liste indicative
        //echo "<br>".utf8_decode($page->getSection('Liste indicative'));
        
        //liste patrimoine mondiale
        echo "<br>".utf8_decode($page->getSection('Patrimoine mondial'))."<br>";
        
        //echo 'page : <br>';
        //echo $page->getText(true);
        */
        $section = utf8_decode($page->getSection('Patrimoine mondial'));
        $tab = tokenization($section,"{}",0,1);
        
        
        // commence par 1 pour enlever le titre inutile 
        for($i=1;$i<count($tab);$i++){
           // echo $tab[$i].'<br>';
            
            $coord = explode("name=", $tab[$i]);
            
            if (isset($coord[1])) { 
               echo $coord[1].'<br>';
            }
            $lien = explode("http", $tab[$i]);
            
            if (isset($lien[1])) { 
               //echo "http".substr($lien[1],0,strlen($lien[1])-7).'<br>';
                $lien_final = explode("]",$lien[1]);
                echo '<a href="http'.$lien_final[0].'" target="_blank"> --></a> <br>';
                
            }
            
            
        }
  
        
        // note : on peut pas recuperer les images : l'url recupérer n'est pas descriptive de l'url ou se trouve l'image
}




