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



$page = $wiki->getPage('Liste_du_patrimoine_mondial_en_France');

// check if the page exists or not
if (!$page->exists() ) {
	echo "'Sausages' doesn't exist.\n";

} else {
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
        $section = utf8_decode($page->getSection('Patrimoine mondial'));
        //echo 'page : <br>';
        //echo $page->getText(true);
        
        echo '<br> TEST : <br>';
        $tab = tokenization($section,"[{}]",0,1);
        
        
        // commence par 1 pour enlever le titre inutile 
        for($i=1;$i<count($tab);$i++){
            echo $tab[$i].'<br>';
            //print_r(tokenization($tab[$i],"|",0,1)).'<br>';
        }
  
        
        // note : on peut pas recuperer les images : l'url recupérer n'est pas descriptive de l'url ou se trouve l'image
}


