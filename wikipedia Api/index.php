<?php
include 'globals.php';
$rand_keys = array();
$band_keys1 = array();
$rand_afficher = array();
$api_url = 'http://fr.wikipedia.org/w/api.php';
$texte = file_get_contents("Data/pays.txt");
$pays_test = '';

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
            }
            else{
                $arrayElements[]=$words;
                }
                $words = strtok($delimiteurs);
        }
        return $arrayElements;
        }

$wiki = new Wikimate($api_url);

    $tab_mots = tokenization($texte , "\n",0,1);
    
    $band_keys1 =  $tab_mots[mt_rand (0, count($tab_mots)-1)];
    $rand_afficher = substr(rtrim($band_keys1) , -1);
    
        if($rand_afficher =='e'){
                $pays_test = substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)));
                if(($pays_test =='Mexique' ) or ($pays_test=='Combodge' ) or ($pays_test=='Mozambique' ) or ($pays_test=='Zaïre Zimbabwe'))  
                {
                    $paye =  "au_"  .(substr($band_keys1 ,0,strlen($band_keys1))) ;
                }
                else 
                   $paye = "en_"  .substr($band_keys1 , 0,strlen($band_keys1));
        }
        elseif( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Cuba')|| (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Singapour')){
                        $paye = "à_"  .substr($band_keys1 ,0,strlen($band_keys1));
                    }
        else {
                $pos = strpos(substr($band_keys1 ,0,strlen($band_keys1)),' ');
                if($pos === false) {

                $paye = "au_"  .(substr($band_keys1 ,0,strlen($band_keys1)));
                }
                else {
                    $paye = "aux_"  .(substr($band_keys1 ,0,strlen($band_keys1)));
                }           
        }    

             $pays = str_replace (" ", "_", $paye);
            $url_final = 'Liste_du_patrimoine_mondial_'.$pays;
            $url_final = rtrim($url_final);            
            var_dump($url_final);echo'<br>';            
            $page = $wiki->getPage($url_final);
    if($url_final = '') {
      
       echo 'Error';
    }   
    else {
    if (!$page->exists() ) {
	echo "Page doesn't exist.\n";
       } 
    else {
        $section = utf8_decode($page->getSection('Patrimoine mondial'));
        $tab = tokenization($section,"{}",0,1);        
        for($i=1;$i<count($tab);$i++){
        $coord = explode("name=", $tab[$i]);            
            if (isset($coord[1])) { 
               echo $coord[1].'<br>';
            }
            $lien = explode("http", $tab[$i]);
            if (isset($lien[1])) { 
                $lien_final = explode("]",$lien[1]);
                echo '<a href="http'.$lien_final[0].'" target="_blank"> --></a> <br>'; 
            }
        }
}
         
           /* else if( (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Kiribati') || (substr(rtrim($band_keys1) ,0,strlen(rtrim($band_keys1)))=='Ile Christmas')  ){
                     $paye = "aux_"  .substr($band_keys1 ,0,strlen($band_keys1));
                    }
            else {
                     $paye = "au_"  .substr($band_keys1 ,0,strlen($band_keys1));
                 }
            * 
            */

    }




